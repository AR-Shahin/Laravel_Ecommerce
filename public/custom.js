$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   $('#inactiveSlider').on('click',function (e) {
       e.preventDefault();
       var url = $(this).attr('href');
       $.ajax({
           url : url,
           method : 'get',
           data : 1,
           success: function (data) {
               if(data == 'SUCCESS'){
                   success('Good Job!','Status Inactive.');
               }
           }
       })
   });
    function success(text,mgs) {
        Swal.fire(
            text,
            mgs,
            'success'
        )
    }

    $('.del_form').on('submit',function (e) {
        e.preventDefault();
        var url = $(this).attr('action');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            timer: 4500
        }).then((result) => {
            if(result.isConfirmed) {
            window.location.href = url;
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
    })
    });
})