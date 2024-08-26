function handleClick(item) {
    var todasInfos = document.querySelectorAll('.galeria .info');
    todasInfos.forEach(function(info) {
        if (info !== item.querySelector('.info')) {
            info.style.visibility = 'hidden';
            info.style.opacity = '0';
        }
    });

    var todasImagens = document.querySelectorAll('.galeria img');
    todasImagens.forEach(function(imagem) {
        if (imagem !== item.querySelector('img')) {
            imagem.style.transform = "scale(1)";
        }
    });

    var info = item.querySelector('.info');
    var img = item.querySelector('img');
    if (info.style.visibility === 'visible') {
        info.style.visibility = 'hidden';
        info.style.opacity = '0';
        img.style.transform = "scale(1)";
    } else {
        info.style.visibility = 'visible';
        info.style.opacity = '1';
        img.style.transform = "scale(2)";
    }
}

function showModal(img, info) {
    var modal = document.getElementById('modal');
    var modalImg = document.getElementById('modal-img');
    var modalInfo = document.getElementById('modal-info');
    var modalAudio = document.getElementById('modal-audio');

    modal.style.display = 'block';
    modalImg.src = img.src;
    modalInfo.innerHTML = info.innerHTML;

    var audioSrc = 'assets/audios/' + img.alt.replace(/ /g, '_').toLowerCase() + '.mp3';
    modalAudio.src = audioSrc;
    modalAudio.load();
}

function closeModal() {
    var modal = document.getElementById('modal');
    modal.style.display = 'none';
}

window.addEventListener('load', function() {
    document.body.classList.add('loading');
  
    setTimeout(() => {
        document.getElementById('loading').style.opacity = '0';
        setTimeout(() => {
            document.getElementById('loading').style.display = 'none';
            document.body.classList.remove('loading');
        }, 2000); 
        
        let imagens = document.querySelectorAll('.galeria img');
        let tempo = 0;
        imagens.forEach(img => {
            setTimeout(() => {
                img.style.display = 'block';
                img.classList.add('fadeIn');
            }, tempo += 500); 
        });
    }, 2000);
});


