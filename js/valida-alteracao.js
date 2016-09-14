//Valida os campos do formulário de alteração
function validaFormAltera(){
           d = document.form;
           var erros = 0;
           //validar nome
           if (d.nome.value == ""){
                     alert("O campo NOME  deve ser preenchido!")
                     d.nome.focus();
                     return false;
           } 

           if (d.cdproduto.value == ""){
           		alert("O campo CÓDIGO DO PRODUTO deve ser preenchido!");
           		d.cdproduto.focus();
           		return false;
           }

           if (d.quantidade.value == ""){
              alert("O campo QUANTIDADE deve ser preenchido!");
              d.quantidade.focus();
              return false;
           }

           if (d.preco.value == ""){
              alert("O campo PREÇO deve ser preenchido!");
              d.preco.focus();
              return false;
           }

           if (d.tipon[0].checked == false 
              && d.tipon[1].checked == false) {
              alert('Por favor, selecione o Tipo Negociação !');
              return false;
              }

           
           

           }			