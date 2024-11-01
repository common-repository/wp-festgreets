jQuery(document).ready(function() {
   // jQuery( '.datepicker1' ).datepicker({minDate: 0  });
   jQuery(".datepicker2").datepicker({
    minDate:  new Date()
    });//.datepicker("setDate", new Date());
jQuery(".datepicker1").datepicker({
    onSelect: function(){
        jQuery('.datepicker2').datepicker('option', 'minDate', jQuery(".datepicker1").datepicker("getDate"));
    }
    });//datepicker("setDate", new Date());
});