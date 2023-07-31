
jQuery(document).ready(function () {
    ImgUpload();
  });
  
  function ImgUpload() {
    var imgWrap = "";
    var imgArray = [];
  
    $('.upload__inputfile').each(function () {
      $(this).on('change', function (e) {
        imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
        var maxLength = $(this).attr('data-max_length');
  
        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        var iterator = 0;
        filesArr.forEach(function (f, index) {
  
          if (!f.type.match('image.*')) {
            return;
          }
  
          if (imgArray.length > maxLength) {
            return false
          } else {
            var len = 0;
            for (var i = 0; i < imgArray.length; i++) {
              if (imgArray[i] !== undefined) {
                len++;
              }
            }
            if (len > maxLength) {
              return false;
            } else {
              imgArray.push(f);
  
              var reader = new FileReader();
              reader.onload = function (e) {
                var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                imgWrap.append(html);
                iterator++;
              }
              reader.readAsDataURL(f);
            }
          }
        });
      });
    });
  
    $('body').on('click', ".upload__img-close", function (e) {
      var file = $(this).parent().data("file");
      for (var i = 0; i < imgArray.length; i++) {
        if (imgArray[i].name === file) {
          imgArray.splice(i, 1);
          break;
        }
      }
      $(this).parent().parent().remove();
    });
  }

$('#inserisciBtn').click(()=>{
  $('#inserisci_cancella').attr('style', 'display: none !important');
  $('#containerCancellaProgetto').hide();
  $('#containerProgetto').show();


});

$('#cancellaBtn').click(()=>{
  $('#inserisci_cancella').attr('style', 'display: none !important');
  $('#containerCancellaProgetto').show();
  $('#containerProgetto').hide();
});


$('#deleteCortometraggi').click(()=>{
  $('#cancella_categoria').attr('style', 'display: none !important');
  renderDeleteList("cortometraggi");
  $('#indietro3').show();
  $('#indietro2').hide();
});

$('#deleteDistribuzione').click(()=>{
  $('#cancella_categoria').attr('style', 'display: none !important');
  renderDeleteList("distribuzioni");
  $('#indietro3').show();
  $('#indietro2').hide();
});

$('#deleteDocumentari').click(()=>{
  $('#cancella_categoria').attr('style', 'display: none !important');
  renderDeleteList("documentari");  
  $('#indietro3').show();
  $('#indietro2').hide();
   
});


$('#indietro').click(()=>{
  $('#inserisci_cancella').attr('style', 'display: !important; width: 95%; max-width: 95%; height: 50vh;');
  $('#inserisci_cancella').attr('class', 'container d-flex align-items-center');
  $('#containerCancellaProgetto').hide();
  $('#containerProgetto').hide();
});

$('#indietro2').click(()=>{

  $('#inserisci_cancella').attr('style', 'display: !important; width: 95%; max-width: 95%; height: 50vh;');
  $('#inserisci_cancella').attr('class', 'container d-flex align-items-center');
  $('#containerCancellaProgetto').hide();
  $('#containerProgetto').hide();
});

$('#indietro3').click(()=>{
  $('#indietro3').hide();
  $('#indietro2').show();

   $('#deleteCortometraggi_documentari').hide();
   $('#deleteCortometraggi_distribuzioni').hide();
   $('#deleteCortometraggi_cortometraggi').hide();
  $('#cancella_categoria').show();
});


function renderDeleteList(categoria){
  $('#deleteCortometraggi_'+categoria).show();
}

$('.list-group-item.list-group-item-action.progettoDaCancellare').click(function(){
  var categoria = (this.id).split('_')[0];
  var titolo = (this.id).substring((this.id).indexOf("_") + 1);

  var ajaxurl = '../inc/deleteProject.php',
        data =  {'categoria': categoria, 'titolo': titolo};
        $.post(ajaxurl, data, function (response) {
            alert("Hai cancellato correttamente il progetto!");
        });
        $("#"+categoria+"_"+titolo).remove();
})


var formfield = document.getElementById('festival');
document.getElementById("basic-addon1").addEventListener("click",add);

function add(){
  $("#basic-addon1").remove();
  $("#basic-del").remove();


  var newInputGroup= document.createElement('div');
  newInputGroup.setAttribute('class', 'input-group');
  formfield.appendChild(newInputGroup);

  var newField = document.createElement('input');
  newField.setAttribute('type','text');
  newField.setAttribute('name','cc-festival[]');
  newField.setAttribute('class','form-control');

  
  var x = document.createElement('span');
  var t = document.createTextNode("+");
  x.setAttribute('class', 'input-group-text')
  x.setAttribute('id', 'basic-addon1')
  x.appendChild(t);

  var g = document.createElement('span');
  var f = document.createTextNode("-");
  g.setAttribute('class', 'input-group-text')
  g.setAttribute('id', 'basic-del')
  g.appendChild(f);

  newInputGroup.appendChild(newField);
  newInputGroup.appendChild(g);
  newInputGroup.appendChild(x);

  document.getElementById("basic-addon1").addEventListener("click",add);
  document.getElementById("basic-del").addEventListener("click",remove);
}

function remove(){
  var input_tags = document.getElementsByClassName('input-group');
  if(input_tags.length >= 2) {
    formfield.removeChild(input_tags[(input_tags.length) - 1]);
  }

  var x = document.createElement('span');
  var t = document.createTextNode("+");
  x.setAttribute('class', 'input-group-text')
  x.setAttribute('id', 'basic-addon1')
  x.appendChild(t);

  if(input_tags.length > 1){
    var g = document.createElement('span');
    var f = document.createTextNode("-");
    g.setAttribute('class', 'input-group-text')
    g.setAttribute('id', 'basic-del')
    g.appendChild(f);
    input_tags[(input_tags.length)-1].appendChild(g);
    document.getElementById("basic-del").addEventListener("click",remove);

  }
  input_tags[(input_tags.length)-1].appendChild(x);
  document.getElementById("basic-addon1").addEventListener("click",add);

}