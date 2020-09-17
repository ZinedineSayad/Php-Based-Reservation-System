$(document).ready(function(){
 
  $("#loginAsClient").click(function(){
        $(".loginAsFreeForm").hide();
        $(".loginAsEntrepriseForm").hide();
        $(".loginAsClientForm").slideToggle('fast');
    });
  $("#loginAsEntreprise").click(function(){
        $(".loginAsFreeForm").hide();
        $(".loginAsClientForm").hide();
        $(".loginAsEntrepriseForm").slideToggle();
    });

   $("#loginAsFreelance").click(function(){
        
        $(".loginAsClientForm").hide();
         $(".loginAsEntrepriseForm").hide();
        $(".loginAsFreeForm").slideToggle();
	});
$("#logEnt").click(function(){
        $(".loginAsFreeForm").hide();
        $(".loginAsClientForm").hide();
        $(".loginAsEntrepriseForm").slideToggle();
    });
$("#logFree").click(function(){
       
        $(".loginAsClientForm").hide();
        $(".loginAsEntrepriseForm").hide();
        $(".loginAsFreeForm").slideToggle();
});
$("#loglog").click(function(){
       
       $(".loginAsFreeForm").hide();
        
        $(".loginAsEntrepriseForm").hide();
        $(".loginAsClientForm").aslideToggle('fast');
});

$("#updateEvenent").click(function(){
       $(".updatePostProductManagement").slideToggle('fast');
});
$("#delateEvenement").click(function(){
       $(".delateEmployeeform").slideToggle('fast');
});
$("#addreservation").click(function(){
       $(".dashboardMenuA").hide();
       $(".addReservationFormm").slideToggle();
});
});