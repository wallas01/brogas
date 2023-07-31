var ita, eng;

var en = $('#englishFlag');
var it = $('#italianFlag');
var selectedFlag = $('#selectedFlag');
var selection = localStorage.getItem("language");

fetch('../language/en-EN.json')
    .then((response) => response.json())
    .then((json) => eng = json)
    .then(()=>{
        fetch('../language/it-IT.json')
        .then((response) => response.json())
        .then((json) => ita = json)
        .then(()=>{
            
            if(selection!=null){
                if(selection.toString() == "it"){
                    selectedFlag.removeClass('fi fi-gb');
                    selectedFlag.addClass('fi fi-it');
                    changeLanguage(ita);
                } else{
                    selectedFlag.removeClass('fi fi-it');
                    selectedFlag.addClass('fi fi-gb');
                    changeLanguage(eng);
                }
            }
        })
    }
    );



en.click(()=>{
    localStorage.setItem("language", "en");
    selectedFlag.removeClass('fi fi-it');
    selectedFlag.addClass('fi fi-gb');
    changeLanguage(eng);

});

it.click(()=>{
    localStorage.setItem("language", "it");
    selectedFlag.removeClass('fi fi-gb');
    selectedFlag.addClass('fi fi-it');
    
    changeLanguage(ita);
});

function changeLanguage(lang){
    $('#navAbout').text(lang.About);
    $('#navProduzioni').text(lang.Produzioni);
    $('#navDocumentary').text(lang.Documentari);
    $('#navCortometraggy').text(lang.Cortometraggi);
    $('#navDistribuzione').text(lang.Distribuzioni);
    $('#navEnglish').text(lang.Inglese);
    $('#navItalian').text(lang.Italiano);
    $('#sinossi').text(lang.sinossi);
    $('#creditiLingua').text(lang.crediti);
    $('#riconoscimenti').text(lang.riconoscimenti);
    $('#regiaDi').text(lang.regia);
    $('#descAndrea').text(lang.Andrea);
    $('#descFrancesco').text(lang.Francesco);
    $('#descGabriele').text(lang.Gabriele);
    $('#descAbout1').text(lang.descAbout1);
    $('#descAbout2').text(lang.descAbout2);
    $('#descAbout3').text(lang.descAbout3);
    $('#descAbout4').text(lang.descAbout4);
    $('#logline1').text(lang.logline1);
    $('#logline2').text(lang.logline2);
}

