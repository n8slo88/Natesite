const audiobutton = document.querySelector('#audioclick')
const backgroundsound = document.querySelector('audio')
const gentleman = document.getElementById("#gentleman")


function audioPlay(){ 
     backgroundsound.play()
}

function audioLoop(){
    audioPlay();
    setInterval(audioPlay, 15000);
}



// Jquery praactice

// $('#discord').text("disc")

// $('#clothespage').hide();

// $('button').click(()=>{
//     $('#homepage').hide();
//     $('#clothespage').show();
// })

$('#audioon').click(()=>{
    audiobutton.innerHTML=""
    audioLoop();
})


function changeimage(){
    $("#gentleman").attr("src","images/gentlemanback.png");
}
function originalimage(){
    $("#gentleman").attr("src","images/gentlemanfront.png");
}

function timeImage(){
    setTimeout(changeimage, 5000);

}



