var {host, hostname, href, origin, pathname, port, protocol, search } = window.location;
var categoria;
var selection = localStorage.getItem("language");
var x = document.querySelector("#elencoProgetti > div:nth-child(1) > div > div > p");
var i = 1;
var testo;

var en = $('#englishFlag');
var it = $('#italianFlag');


function getInfoJSON() {
    categoria = search.substring(search.indexOf("=") + 1);
}
getInfoJSON();


en.click(()=>{
    i=1;
    x = document.querySelector("#elencoProgetti > div:nth-child("+i+") > div > div > p");
    for(i=1; x!=null; i++){
        changeLanguageProject(x.id, "info_EN.json");
        i=i+1;
        x = document.querySelector("#elencoProgetti > div:nth-child("+i+") > div > div > p");
    }
});

it.click(()=>{     
    i=1;
    x = document.querySelector("#elencoProgetti > div:nth-child("+i+") > div > div > p");           
    for(i=1; x!=null; i++){
        changeLanguageProject(x.id, "info_IT.json");
        i=i+1;
        x = document.querySelector("#elencoProgetti > div:nth-child("+i+") > div > div > p");
    }
});


if(selection.toString()=="it"){
    i=1;
    x = document.querySelector("#elencoProgetti > div:nth-child("+i+") > div > div > p");           
    for(i=1; x!=null; i++){
        changeLanguageProject(x.id, "info_IT.json");
        i=i+1;
        x = document.querySelector("#elencoProgetti > div:nth-child("+i+") > div > div > p");
    }
}else{
    i=1;
    x = document.querySelector("#elencoProgetti > div:nth-child("+i+") > div > div > p");           
    for(i=1; x!=null; i++){
        changeLanguageProject(x.id, "info_EN.json");
        i=i+1;
        x = document.querySelector("#elencoProgetti > div:nth-child("+i+") > div > div > p");
    }
}



function changeLanguageProject(titolo, lingua){
    fetch('../src/'+categoria+'/'+titolo+'/'+lingua)
    .then((response) => response.json())
    .then((json) => testo = json)
    .then(()=>{
        $('#'+titolo.replace(/ /g, "\\ ")).text(testo.LOGLINE);
    });
}


