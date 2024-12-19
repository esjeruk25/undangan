function bukaUndangan(){
    const s1 = document.querySelector('#section-1');
    const s2 = document.querySelector('#section-2');
    const s3 = document.querySelector('#section-3');
    const s4 = document.querySelector('#section-4');
    const s5 = document.querySelector('#section-5');
    const s6 = document.querySelector('#section-6');
    const s7 = document.querySelector('#section-7');
    const s8 = document.querySelector('#section-8')
s1.style.display = 'none';
s2.style.display = 'block';
s3.style.display = 'block';
s4.style.display = 'block';
s5.style.display = 'block';
s6.style.display = 'block';
s7.style.display = 'block';
s8.style.display = 'block';

const musik = document.querySelector('#audio-box');
musik.style.display ='block';

const lagu = document.querySelector('#lagu');
lagu.play();

}


function putarLagu(){
    const lagu = document.querySelector('#lagu');
    const tombol = document.querySelector('#kontrol');

    if(lagu.paused){
        lagu.play();
        tombol.src = 'assets/img/mute-removebg-preview.png';
     
    }
    else{
        lagu.pause();
        tombol.src = 'assets/img/speaker-removebg-preview.png';
    }
}