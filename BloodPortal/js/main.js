jQuery(document).on('ready', function ($) {
    "use strict";

    /*--------------------------
        SCROLLSPY ACTIVE
    ---------------------------*/
    $('body').scrollspy({
        target: '.bs-example-js-navbar-scrollspy',
        offset: 50
    });


    /*--------------------------
        STICKY MAINMENU
    ---------------------------*/
    $("#mainmenu-area").sticky({
        topSpacing: 0
    });


    /*-----------------------------
        SLIDER ACTIVE
    ------------------------------*/
    var mySlider = $('.pogoSlider').pogoSlider({
        pauseOnHover: false
    }).data('plugin_pogoSlider');


    /*---------------------------
        SMOOTH SCROLL
    -----------------------------*/
    $('ul#nav li a[href^="#"],a.navbar-brand,.slider-area h3 a,a.scrolltotop').on('click', function (event) {
        var id = $(this).attr("href");
        var offset = 40;
        var target = $(id).offset().top - offset;
        $('html, body').animate({
            scrollTop: target
        }, 1500, "easeInOutExpo");
        event.preventDefault();
    });


    /*----------------------------
        SCROLL TO TOP
    ------------------------------*/
    $(window).scroll(function () {
        var totalHeight = $(window).scrollTop();
        if (totalHeight > 300) {
            $(".scrolltotop").fadeIn();
        } else {
            $(".scrolltotop").fadeOut();
        }
    });


    /*---------------------------
        SCREENSHOT SLIDER
    -----------------------------*/
    $('.videos_catagory').owlCarousel({
        merge: true,
        video: true,
        items: 1,
        smartSpeed: 1000,
        loop: true,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        autoplay: false,
        autoplayTimeout: 2000,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });


    /*----------------------------
        TAB PANEL ACTIVE
    ------------------------------*/
    $('.panel').on('click', function (e) {
        $('.panel').removeClass('active');
        var $this = $(this);
        if (!$this.hasClass('active')) {
            $this.addClass('active');
        }
        e.preventDefault();
    });

}(jQuery));


jQuery(window).load(function () {
    "use strict";
    /*--------------------------
        PRE LOADER
    ----------------------------*/
    $(".preeloader").fadeOut(1000);
});

function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
//var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
var countries=["Yelahanka","Doddaballapur","Rajanakunte","Rajajinagar","Yeshwanthpura","Hebbal","Jayanagar","Mathikere","Chickpet"];
/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);


/*javascript*/
$(document).ready(function(){
      filter1("all");Hide();
      });

      function Hide()
      {
        var x = document.getElementById("display");
        x.style.display = "none";
      }

  function filter1(str) {
   if(str){
                 
                $.ajax({
                    url:"hospitals.php",
                    type:"post",
                    data:{
                        "str":str
                        },
                    success:function(data){
                        var obj=JSON.parse(data);
                        var table_content=""
                        $('#hospital_list').find( 'tr:not(:first)' ).remove();
                        $.each(obj,function(index,value){
                            table_content+="<tr>";
                            table_content+="<td><center>"+value.id+"</center></td>";
                            table_content+="<td><center>"+value.blood_bank+"</center></td>";
                            table_content+="<td><center>"+value.address+"</center></td>";
                            table_content+="<td><center>"+value.phone+"</center></td>";                            
                        });
                        $("#hospital_list").append(table_content);

                    }
                });
            }
            else{
                location.reload();
            }
   }


   function call(n)
   {
        
        document.getElementById("display").style.display="none";
        var s1 = document.getElementById("district");
        var str1 = s1.value;

        var s2 = document.getElementById("blood");
        var str2 = s2.value;

        if(n==1)
        {
          filter2(n,str1,str2);
        }

        else if(str1==0 || str2==0)
          {
            var x = document.getElementById("display");
            if (x.style.display === "none") 
            {
              x.style.display = "block";
              document.getElementById("records1").style.visibility="hidden";
              document.getElementById("d1").style.visibility="hidden";
              document.getElementById("records2").style.visibility="visible";
              document.getElementById("records2").innerHTML="Please select an appropriate option!";
            } 
            
            else 
            {
              x.style.display = "none";
            }
          }



        else
        {
            filter2(n,str1,str2);
           var x = document.getElementById("display");
            if (x.style.display === "none") {
              x.style.display = "block";
              document.getElementById("records2").style.visibility="hidden";
              document.getElementById("d1").style.visibility="visible";
              document.getElementById("records1").style.visibility="visible";
              
            } 

            else 
            {
              x.style.display = "none";
            }
        }   

            
    }

   function filter2(n,str1,str2) {
   if(str1){
                 
                $.ajax({
                    url:"donors_list.php",
                    type:"post",
                    data:{
                        "str1":str1,"str2":str2,"n":n
                    },
                    success:function(data){
                        var obj=JSON.parse(data);
                        var table_content="";
                        if(jQuery.isEmptyObject(obj))
                        {
                            document.getElementById("records1").style.visibility="hidden";
                            document.getElementById("records2").style.visibility="visible";
                        }
                        $('#d1').find( 'tr:not(:first)' ).remove();
                        $.each(obj,function(index,value){
                            table_content+="<tr>";
                            table_content+="<td><center>"+value.blood+"</center></td>";
                            table_content+="<td><center>"+value.name+"</center></td>";
                            table_content+="<td><center>"+value.phone+"</center></td>";
                            table_content+="<td><center>"+value.email+"</center></td>";
                            table_content+="<td><center>"+value.district+"</center></td>";                            
                        });
                        $("#d1").append(table_content);

                    }
                });
            }
            else{
                location.reload();
            }
   }

   function organizer_validate()
      {
          var phone = document.getElementById("org_phone").value;
            
          if(phone.length < 10)
          {
            alert("Please enter valid phone number!!");
            document.getElementById("org_phone").focus();
            return false;
          }
          return true;
      }

      function registration_submit()
      {
        var check=document.getElementById("myCheck");
        if(check.checked==true)
          document.getElementById("mySubmit").disabled=false;
      }

      function registration_validate()
      {
          var phone = document.getElementById("reg_phone").value;
          if(phone.length < 10)
          {
            alert("Please enter valid phone number!!");
            document.getElementById("reg_phone").focus();
            return false;
          }
          return true;
      }

      function validate_feedback()
      {
        var phone = document.getElementById("feedback_phone").value;
          if(phone.length < 10)
          {
            alert("Please enter valid phone number!!");
            document.getElementById("feedback_phone").focus();
            return false;
          }
          return true;
      }

      function onlyAlphabets(e, t) {

            try {

                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode==32 || charCode==8 || charCode==11)
                    return true;
                else
                    return false;
            }

            catch (err) {
                alert(err.Description);
            }
        }

