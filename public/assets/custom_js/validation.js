function alert_func(data) {
	swal({title: data[0], type: data[1], confirmButtonColor: data[2]});
}

function confirm_yes(msg, ptype, okclose, btn, colors) {
	if (typeof btn === "undefined" || btn === null) { 
		btn = ['Yes','No']; 
	}
	if (typeof colors === "undefined" || colors === null) { 
		colors = ['#A5DC86','#DD6B55']; 
	}
	if (typeof okclose === "undefined" || okclose === null) { 
		okclose = false; 
	} else {
		okclose = true; 
	}
	swal({
		title: msg,
		type: ptype,
		showCancelButton: true,
		confirmButtonColor: colors[0],
		cancelButtonColor: colors[1],
		confirmButtonText: btn[0],
		cancelButtonText: btn[1],
		closeOnConfirm: okclose,
		closeOnCancel: true,
		width:'800px',
	}, function(isConfirm){
		if (isConfirm) {
			return true;
		} else {
			return false
		}
	});
}

function only_number(event)
    {
       var x = event.which || event.keyCode;
        console.log(x);
        if((x >= 48 ) && (x <= 57 ) || x == 8 | x == 9 || x == 13 )
        {
            return;
        }else{
            event.preventDefault();
        }
    }

    function only_alphabets(event)
      {
        var x = event.which || event.keyCode;
        console.log(x);
        if((x >= 65 ) && (x <= 90 ) || (x >= 97 ) && (x <= 122 ) ||(x==32))
        {
          return;
        }else{
          event.preventDefault();
        }
}

 