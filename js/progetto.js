var {host, hostname, href, origin, pathname, port, protocol, search } = window.location;
var categoria, titolo;
var selection = localStorage.getItem("language");

var en = $('#englishFlag');
var it = $('#italianFlag');

function getInfoJSON() {
    categoria = search.substring(search.indexOf("=") + 1);
    categoria = categoria.replace(/%20/g, " ");
    titolo = categoria.substring(categoria.indexOf("=") + 1);
    categoria = categoria.split('&')[0];
}

getInfoJSON();

fetch('../src/'+categoria+'/'+titolo+'/info_EN.json')
    .then((response) => response.json())
    .then((json) => eng = json)
    .then(()=>{
        fetch('../src/'+categoria+'/'+titolo+'/info_IT.json')
        .then((response) => response.json())
        .then((json) => ita = json)
        .then(()=>{
            if(selection!=null){
                if(selection.toString() == "it"){
                    changeLanguageProject(ita);
                } else{
                    changeLanguageProject(eng);
                }
            }
            $('#iframeDaInserire').append(`
            <iframe src="${ita.link}" allowfullscreen></iframe>
            `);
            
        })
    }
);

en.click(()=>{
    changeLanguageProject(eng);           
});

it.click(()=>{                
    changeLanguageProject(ita);
});




function changeLanguageProject(langProject){
    $('#sinossiTesto').text(langProject.SINOSSI);

    //CREDITI
    $('#creditiDaInserire > div').remove();
    jQuery.each(langProject, function(i, val) {
        if(i!="LOGLINE" && i!="SINOSSI" && i!="FESTIVAL" && i!="link" && i!="inDistribuzione" ){
            $('#creditiDaInserire').append(`
                <div class="col ">
                <p class="text-end">${i}</p>
                </div>
                <div class="col ">
                <p class="ext-start fw-semibold">${val}</p>
                </div>
            `);
        }
    });

    
    //RICONOSCIMENTI
    $('#partecipazioni > p').remove();
    jQuery.each(langProject.FESTIVAL, function(i, val) {
            $('#partecipazioni').append(`
            <p  class="text-md-start text-center font-italic">${val}</p>
            `);
    });
}