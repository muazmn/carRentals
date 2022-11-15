
// $(document).ready(function(){
//     $("#rent").click(function(){
//       console.log('tekan butang tu buat apa!!!');
//     });
// });


// var babi =  document.querySelectorAll(".babi");
// var rentedCar =  document.querySelectorAll(".rentedCar");
// $(document).ready(function(){
//     $(babi).click(function (){
//         var k = $(this).closest(".rentedCar")
//             $(".sajaTest").remove();
//         });
// })
        function password_show_hide() {
            var x = document.getElementById("password");
            var xd = document.getElementById("password2");
            var show_eye = document.getElementById("show_eye");
            var hide_eye = document.getElementById("hide_eye");
            hide_eye.classList.remove("d-none");
            if (xd.type === "password" && x.type === "password") {
                xd.type = "text";
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                xd.type = "password";
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }
        function password_show_hide2() {
            var x = document.getElementById("password");
            var show_eye = document.getElementById("show_eye");
            var hide_eye = document.getElementById("hide_eye");
            hide_eye.classList.remove("d-none");
            if ( x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }
        // function password_show_hide() {
        //     var x = document.getElementById("password");
        //     var show_eye = document.getElementById("show_eye");
        //     var hide_eye = document.getElementById("hide_eye");
        //     hide_eye.classList.remove("d-none");
        //     if ( x.type === "password") {
        //         x.type = "text";
        //         show_eye.style.display = "none";
        //         hide_eye.style.display = "block";
        //     } else {
        //         x.type = "password";
        //         show_eye.style.display = "block";
        //         hide_eye.style.display = "none";
        //     }
        // }
        var kali1 = document.getElementById('kali1')
        var kali2 = document.getElementById('kali2')
        var kali3 = document.getElementById('kali3')
        // $(document).on('input', '#nomborKali', function() {
        //     var coins = $('#nomborKali').val();
        //     // var hasil = kali1 * 2
        //     console.log(kali1)
        //     var my = $(kali1).text() * coins;
        //     var my2 = $(kali2).text() * coins;
        //     var my3 = $(kali3).text() * coins;
        //         $('.hargaPerkaliann').text(my3);

        // })

        // BUTANG PER HOUR
        var perHour = document.getElementById('perHour');
        var perDay = document.getElementById('perDay');
        var perKm = document.getElementById('perKm');
        var hA1 = document.getElementById('hargaAsal1');
        var hA2 = document.getElementById('hargaAsal2');
        var hA3 = document.getElementById('hargaAsal3');
        var pagin = document.querySelector('nav#pagin ul');
        var pagin2 = document.querySelectorAll('li.pagin');
        // var pagin3 = pagin2.querySelectorAll('pagin')
        let paginationLeftPos = "20px";
        let paginationOpacity = 0;
        let checkPaginationClick = 0;

        $(document).ready(function() {
            for(let i = 0; i < pagin2.length; i++){
                $(pagin2[i]).click(function(){
                    var pagin3 = pagin.querySelectorAll('li.pagin.active')[i];
                    // var tekan = true;
                    // $(pagin3).removeClass('active')
                    // $(pagin2[i]).addClass('active')
                    // if($(pagin2[i]).hasClass('active')){
                    //     $(pagin2[i]).removeClass('active')
                        $(pagin2[i]).removeClass('active')
                        $(this).addClass("active");
                        paginationLeftPos = $(this).css('color','red');
                        paginationOpacity = 1;
                        checkPaginationClick = 1;
                        // var paginBr = pagin2
                    // }else if($(pagin2[2]).hasClass('active')){
                        // }
                    // }else{
                    // }
                })
            }
            // $(kali1).show();
            $(kali2).hide();
            $(kali3).hide();
            $(hA2).hide();
            $(hA3).hide();
            $(hA3).hide();
                // $('.hargaPerkaliann').val(coins);
            $(document).on('input', '#nomborKali', function() {
                    var my = $(kali1).val()
                        var coins = $('#nomborKali').val()
                        my1 = $(hA1).text() * coins
                        var my2 = $(kali1).val(my1) 
                            // $('.hargaPerkaliann').text(coins);
                    })
            // $('.hargaPerkaliann').text(my);
            $(perHour).click(function() {
                $(kali1).show();
                $(kali2).hide();
                $(kali3).hide();
                $(hA2).hide();
                $(hA3).hide();
                $(hA1).show();
                console.log("kflll")
                var my = $(kali1).val()
                $('.hargaPerkaliann').text(my);
                $(document).on('input', '#nomborKali', function() {
                    var my = $(kali1).val()
                    var coins = $('#nomborKali').val()
                    my1 = $(hA1).text() * coins
                    var my2 = $(kali1).val(my1) 
                    })
                // $('.hargaPerkaliann').text();
            });
            $(perDay).click(function() {
                $(kali1).hide();
                $(kali2).show();
                $(kali3).hide();
                $(hA2).show();
                $(hA3).hide();
                $(hA1).hide();
                console.log("kfl")
                var my = $(kali2).text()
                $('.hargaPerkaliann').text(my);
                $(document).on('input', '#nomborKali', function() {
                    var my = $(kali2).val()
                    var coins = $('#nomborKali').val()
                    my1 = $(hA2).text() * coins
                    var my2 = $(kali2).val(my1) 
                    })
                // $('.hargaPerkaliann').text();
            });
            $(perKm).click(function() {
                $(kali1).hide();
                $(kali2).hide();
                $(kali3).show();
                $(hA2).hide();
                $(hA3).show();
                $(hA1).hide();
                console.log("kfl")
                var my = $(kali3).text()
                $('.hargaPerkaliann').text(my);
                $(document).on('input', '#nomborKali', function() {
                    var my = $(kali3).val()
                    var coins = $('#nomborKali').val()
                    my1 = $(hA3).text() * coins
                    var my2 = $(kali3).val(my1) 
                    })
                // $('.hargaPerkaliann').text();
            });
        });
        // var price = document.getElementsByClassName("kali1")
        // $(document).on('input', '#nomborKali', function() {
        //     var coins = $('#nomborKali').val();
        //     let nom = "";
        //     for(let i = 0; i < price.length; i++ ){
        //         var hasil = price[i]
        //         nom += parseFloat(price[i]) * coins;
        //         $(hasil).text(nom);
        //     }


        // })
// $(document).ready(function(){
//     $("#tes2").click(function () {
//         $("#tes3").remove()
//     })
// })
        // if($(window).width() > 100)
        // {
        //     $('.collapseNav').hide();
        // } else {
        //     $('.collapseNav').show();

        // }
// // var rent =  document.querySelectorAll("#rent");
// var rentedCar =  document.querySelectorAll(".rentedCar");
// $(document).ready(function(){
//     $('.Details').click(function (){
//         var k = $(this).closest(".rentedCar")
//             $(".modal-body").html(`<h1>fdsafsdf</h1>`);
//         });
// })
// BUTANG INI BUAT TEST, BUTANG INI ADA PADA HALAMAN INDEX
$(document).ready(() => {
        $("#ff").click(function () {
            $("#test").remove();
        });
    });
//     var myModal = document.getElementById('myModal')
// var myInput = document.getElementById('myInput')
$(document).ready(function() {
    $("#modalClose").click(function() {
        $('#myModal').modal('hide');
    });
});
var bayaran1 = document.querySelectorAll('#bayaran1')
var bayaran2 = document.querySelectorAll('#bayaran2')
var bayaran3 = document.querySelectorAll('#bayaran3')
$(document).ready(function() {
    $(".details").click(function(){
        $(bayaran2).hide()
         $(bayaran3).hide()
          $(bayaran1).show()
    });
      $(".kadarBayaran1").click(function() {
          $('.kadarBayaran1').css({"color":"#007bff"});
          $('.baris1').css("border","1px solid #007bff")
          $('.baris2').css("border","1px solid black")
          $('.baris3').css("border","1px solid black")
          $('.kadarBayaran2').css("color","black");
          $('.kadarBayaran3').css("color","black");
          $(bayaran2).hide()
          $(bayaran3).hide()
          $(bayaran1).show()
      });
      $(".kadarBayaran2").click(function() {
          $('.kadarBayaran2').css({"color":"#007bff"});
          $('.baris2').css("border","1px solid #007bff")
          $('.baris1').css("border","1px solid black")
          $('.baris3').css("border","1px solid black")
          $('.kadarBayaran1').css("color","black");
          $('.kadarBayaran3').css("color","black");
          $(bayaran1).hide()
          $(bayaran3).hide()
          $(bayaran2).show()
      });
      $(".kadarBayaran3").click(function() {
          $('.kadarBayaran3').css({"color":"#007bff"});
          $('.baris3').css("border","1px solid #007bff")
          $('.baris2').css("border","1px solid black")
          $('.baris1').css("border","1px solid black")
          $('.kadarBayaran1').css("color","black");
          $('.kadarBayaran2').css("color","black");
          $(bayaran1).hide()
          $(bayaran2).hide()
          $(bayaran3).show()

      });
    });
    $(document).ready(function() {
        var inputGroup = document.querySelectorAll('#inputGroup');
        var inputGroupBaru = document.querySelectorAll('#baru');
        var inputGroup2 = document.querySelectorAll('input#inputKe2');
        var contactGroup = document.querySelectorAll('div#contactDua');
        $.each(inputGroup, function(i, v) {
            console.log(v)
            // if($(window).matchMedia("screen and(max-width: 800px)")) {
            //     console.log("saya muaz")
            //     $(v).removeClass("input-group")
            // }else{
            //     $(v).addClass("input-group")
            // }
            $(window).on('resize', responsiveRegister = () => {
                if($(window).width() < 785) {
                   $(v).removeClass("input-group")
                   $(inputGroup2[i]).removeClass("ms-3")
                   $("input#password2").removeClass("ms-3")
                   $(contactGroup[i]).removeClass("contactDua pb-3")
                //    $("span.baru").remove()
                }else{
                  $(v).addClass("input-group")
                  $(inputGroup2[i]).addClass("ms-3")
                  $(contactGroup[i]).addClass("contactDua")
                //   $(inputGroupBaru).after('<span class="input-group-text border-0 bg-body text-muted fw-bold"></span>')

                }
            })
            $(window).on('resize', responsiveRegister());
        })
        $("button.navbar-toggler").click(function(e){
            var elem = $(e.currentTarget);
            if(elem.attr('aria-expanded') === "false") {
                $(".navbar-toggler-icon").css("height", "30px")
            } else {
                $(".navbar-toggler-icon").css("height", "10px")
            }
        })
        var input = document.getElementById("nomborKali");
        var span = document.getElementById("spanId");
        console.log($(input).val());
        $(span).html("fdafsfdsf")
});
    // document.ready(function(){
    //     $(".hour").click(function() {
    //         $(".day").remove();
    //         $(".km").remove();
    //     })
    // })
// $(document).ready(function() {
//     $("[data-bs-toggle='modal']").modal();

//     });

// function test() {
//     $.ajax({url:"index.php", success:function(result){
//         $("#test2").text(result);
//     }})
// }


    // function clickme() {
    //     var result ="<?php myFunction(); ?>"
    //     document.write(result);
    // }
// $(document).ready(function() {
//     $('#rent').each(function(index) {
//                 $('this').on("click",function(){
//                     $('#test2').hide();
//                 });
            
//         });
//     });




// $.ajax({
//   type: "GET",
//   url: "index.php",
//   dataType: "html",
//   success: function(data){
//     $("#daftar-kereta").html(data);
//   }
// })
// $(function() {

// });
// $(document).ready(
// $('#daftar-kereta').html(`
// <div class="card" style="width: 18rem;">
//   <img src="..." class="card-img-top" alt="...">
//   <div class="card-body">
//     <h5 class="card-title">Card titles</h5>
//     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
//     <a href="#" class="btn btn-primary">Go somewhere</a>
//   </div>
// </div>`)
// )


// BARU HABIS ISI VALUE BAGI INPUT DENGAN ID KALI1 HUHU :)













































