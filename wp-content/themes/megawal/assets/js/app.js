let obj = {
  frames : document.querySelectorAll('.frame'),
  tabs   : document.querySelectorAll('.tab'),
  active_tab : '',
  index     : null,
  initialX  : null,
  initialY  :null
};
//-----------------------------------------------
function find_index(arr, frame) {

  for (let i = 0; i < arr.length; i++){
      if(arr[i] === frame){
          return i;
      }
  }
}
//------------- next slade-------------------------

function next_frame(frame) {
      if(frame.classList.contains('active')){
          if(frame.nextElementSibling){
              let next = frame.nextElementSibling;
              let dur;
              if(next.querySelector('.background-video')){
                  dur = duration_video(next.querySelector('.background-video'));
              }
              frame.classList.remove('active');
              frame.style.display = 'none';
              next.classList.add('active');
              next.style.display = '';
              move(next, dur);
          }

      }
}

//--------- previous slide --------------------

function previous_frame(frame) {
      if(frame.classList.contains('active')){
          if(frame.previousElementSibling){
              let previous = frame.previousElementSibling;
              let dur;
              if(previous.querySelector('.background-video')){
                  dur = duration_video(previous.querySelector('.background-video'));
              }
              frame.classList.remove('active');
              frame.style.display = 'none';
              previous.classList.add('active');
              previous.style.display = '';
              move(previous, dur);
          }
      }
}
//--------- duration video -------------------
function duration_video(video) {

  let duration = Math.floor(10  * video.duration) ||
                 Math.floor(10 * video.currentTime);
 return duration; // will return the full length of the movie
}
//-------- video value -----------------------


//---------- find tab -------------------------

function find_tab(frame) {
  let arr_frames = obj.frames,
      arr_tabs = frame.querySelectorAll('.tab'),
      index = find_index(arr_frames, frame);

  return arr_tabs[index];
}

// ------------progress bar --------------------

function move(frame, duration) {

  remove_class_from_tab(frame);
  let dur = 0;

  duration ? dur = duration : dur = 30;

  let tab = find_tab(frame),
      i = 0;

  if (i === 0) {
      i = 1;
      let elem = tab.querySelector(".active");
      let width = 1;
      let id = setInterval(_frame, dur);
      function _frame() {
          if (width >= 100) {
              clearInterval(id);
              elem.classList.add('white');
              next_frame(frame);
              i = 0;
          } else {
              width++;
              elem.style.width = width + "%";
          }
      }
  }
}

//---------------------------------------------

// слушаем событие resize
window.addEventListener('resize', () => {
  // получаем текущее значение высоты
  // let vh = window.innerHeight ? window.innerHeight * 0.01 : $(window).height() * 0.01;
  let vh = window.innerHeight * 0.01 || document.documentElement.clientHeight * 0.01 || $(window).height() * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});


//------------- Swipe Up / Down / Left / Right---------
function startTouch(e) {
  obj.initialX = e.touches[0].clientX;
  obj.initialY = e.touches[0].clientY;
}
function moveTouch(e) {

  if (obj.initialX === null) {
      return;
  }

  if (obj.initialY === null) {
      return;
  }

  let currentX = e.touches[0].clientX,
      currentY = e.touches[0].clientY;

  let diffX = obj.initialX - currentX,
      diffY = obj.initialY - currentY;



  if (Math.abs(diffX) > Math.abs(diffY)) {
      // sliding horizontally
      if (diffX > 0) {
          // swiped left
          next_frame();
      } else {
          // swiped right
          previous_frame();
      }
  } else {
      // sliding vertically
      if (diffY > 0) {
          // swiped up
      } else {
          // swiped down
        }
  }

  obj.initialX = null;
  obj.initialY = null;
}
//------------------------------------------------------
function remove_class_from_tab(el) {
  let current_tab = find_tab(el),
      current_active_tab = current_tab.querySelector('.active');
      current_active_tab.style.width = 0;
      current_active_tab.clientWidth = 0;
      current_active_tab.classList.remove('white');
}

//------------------------------------------------------
function startListener(){
  document.ontouchstart = startTouch;
  // document.ontouchmove = moveTouch;
}


$(document).ready(function(){

  obj.frames.forEach(el=>{
      el.style.display = 'none';
      el.addEventListener('click', () =>{
          if(obj.initialX >= document.documentElement.clientWidth / 2 ){

                 remove_class_from_tab(el);

              let next_tabs = find_tab(el.nextElementSibling),
                  active_tab = next_tabs.querySelector(".active");
                  active_tab.classList.remove('white');
                  next_frame(el);
          }else{

                 remove_class_from_tab(el);

              let previous_tabs = find_tab(el.previousElementSibling),
                  active_tab = previous_tabs.querySelector(".active");
                  active_tab.classList.remove('white');
                  previous_frame(el);
          }
      })
  });
  obj.frames[0].style.display = '';
  move(obj.frames[0]);

  let vh = window.innerHeight * 0.01 || document.documentElement.clientHeight * 0.01 || $(window).height() * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);

  startListener();
});
$(":input").inputmask();
$("#phone").inputmask("+38 (999) 999-99-99");