            $(function(){
              $("#envoyerConnexion").click(function(){
                    var valid = true;
                        if($("#champLogin").val() == ""){
                                           $("#champLogin").css("border-color","red");
                                           $("#loginConnexion").next(".error-message").fadeIn().text("veuillez entrer votre login").css("color","red");;
                                           valid = false;
                                             }
                                           else if(!$("#champLogin").val().match(/^[a-z]+$/i)){
                                                $("#champLogin").css("border-color","red");
                                                $("#loginConnexion").next(".error-message").fadeIn().text("veuillez entrer un login valide").css("color","red");
                                                    valid = false;
                                            }
                                           else{
                                                $("#champLogin").css("border-color","green");
                                                $("#loginConnexion").next(".error-message").fadeOut().text("veuillez entrer votre login");
                                           }
                         if($("#champPassword").val() == ""){
                                           $("#champPassword").css("border-color","red");
                                           $("#passwordConnexion").next(".error-message").fadeIn().text("veuillez entrer votre mot de passe ").css("color","red");
                                         valid = false;
                                           }
                                           else{
                                                $("#champPassword").css("border-color","green");
                                                $("#passwordConnexion").next(".error-message").fadeOut().text("veuillez entrer votre login");
                                                }
                                        return valid;
                                    });
              });
$(function(){
              $("#envoyerPatient").click(function(){
                    var valid = true;
                        if($("#champNom").val() == ""){
                                           $("#champNom").css("border-color","red");
                                           $("#nom").next(".error-message").fadeIn().text("veuillez entrer votre nom").css("color","red");
                                           valid = false;
                                             }
                                           else if(!$("#champNom").val().match(/^[a-z]+$/i)){
                                                $("#champNom").css("border-color","red");
                                                $("#nom").next(".error-message").fadeIn().text("veuillez entrer un nom valide").css("color","red");
                                                    valid = false;
                                            }
                                           else{
                                                $("#champNom").css("border-color","green");
                                                $("#nom").next(".error-message").fadeOut().text("veuillez entrer un nom valide");
                                           }
                         if($("#champPrenom").val() == ""){
                                           $("#champPrenom").css("border-color","red");
                                           $("#prenom").next(".error-message").fadeIn().text("veuillez entrer un prenom ").css("color","red");
                                         valid = false;
                                           }
                                         else if(!$("#champPrenom").val().match(/^[a-z]+$/i)){
                                                $("#champPrenom").css("border-color","red");
                                                $("#prenom").next(".error-message").fadeIn().text("veuillez entrer un nom valide").css("color","red");
                                         valid = false;
                                         }
                                           else{
                                                $("#champPrenom").css("border-color","green");
                                                $("#prenom").next(".error-message").fadeOut().text("veuillez entrer un prenom");
                                                }
                        if($("#champNumero").val() == ""){
                                           $("#champNumero").css("border-color","red");
                                           $("#numero").next(".error-message").fadeIn().text("veuillez entrer un numero").css("color","red");;
                                           valid = false;
                                             }
                                           else if(!$("#champNumero").val().match(/^[0-9]+$/i)){
                                                $("#champNumero").css("border-color","red");
                                                $("#numero").next(".error-message").fadeIn().text("veuillez entrer un numero valide").css("color","red");
                                                    valid = false;
                                            }
                                           else{
                                                $("#champNumero").css("border-color","green");
                                                $("#numero").next(".error-message").fadeOut().text("veuillez entrer un numero valide");
                                           }
                        if($("#champAge").val() == ""){
                                           $("#champAge").css("border-color","red");
                                           $("#age").next(".error-message").fadeIn().text("veuillez entrer un age").css("color","red");;
                                           valid = false;
                                             }
                                           else if(!$("#champAge").val().match(/^[0-9]+$/i)){
                                                $("#champAge").css("border-color","red");
                                                $("#age").next(".error-message").fadeIn().text("veuillez entrer un age valide").css("color","red");
                                                    valid = false;
                                            }
                                           else{
                                                $("#champAge").css("border-color","green");
                                                $("#age").next(".error-message").fadeOut().text("veuillez entrer un age valide");
                                           }
                                             return valid;
                                    });
              });
            
$(document).ready(function(){
                  $('.nav_bar').click(function(){
                                      $('.navigation').toggleClass('visible');
                                      $('body').toggleClass('opacity');
                                      });
                  });