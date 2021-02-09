const flashData = $('.flash-success').data('flashdata');
if(flashData){
	toastr.success(flashData);
}