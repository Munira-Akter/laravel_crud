(function($) {
    $(document).ready(function() {

        // student form img load

        $(document).on('change', 'input#student-img-loader', function(e) {
            e.preventDefault();
            let student_img = URL.createObjectURL(e.target.files[0]);
            $('#student_img_show').attr('src', student_img).css('height', '300px').css('width', '300px');
            $('#student_remove').show();
            $('#student-img-loader').hide();
        });

        // student form img remove
        $(document).on('click', '#student_remove', function(e) {
            e.preventDefault();
            $('#student_img_show').attr('src', '').css('height', '0').css('width', '0');
            $('#student_remove').hide();
            $('#student-img-loader').show();
        });




        //staff form img load

        $(document).on('change', 'input#staff-img-loader', function(e) {
            e.preventDefault();
            let staff_img = URL.createObjectURL(e.target.files[0]);
            $('#staff_img_show').attr('src', staff_img).css('height', '300px').css('width', '300px');
            $('#staff_remove').show();
            $('#staff-img-loader').hide();
        });

        //staff form img remove
        $(document).on('click', '#staff_remove', function(e) {
            e.preventDefault();
            $('#staff_img_show').attr('src', '').css('height', '0').css('width', '0');
            $('#staff_remove').hide();
            $('#staff-img-loader').show();
        });



        // teacher form img load

        $(document).on('change', 'input#teacher-img-loader', function(e) {
            e.preventDefault();
            let teacher_img = URL.createObjectURL(e.target.files[0]);
            $('#teacher_img_show').attr('src', teacher_img).css('height', '300px').css('width', '300px');
            $('#teacher_remove').show();
            $('#teacher-img-loader').hide();
        });

        // teacher form img remove
        $(document).on('click', '#teacher_remove', function(e) {
            e.preventDefault();
            $('#teacher_img_show').attr('src', '').css('height', '0').css('width', '0');
            $('#teacher_remove').hide();
            $('#teacher-img-loader').show();
        });

        //  errors msg hide

        let ss = setInterval(function() {
            $('.errors').html('');
            clearInterval(ss);
        }, 20000);

        //  delete data

        // $(document).on('click', '#delete', function(e) {
        //     e.preventDefault();
        //     let conn = confirm('Are you sure you eant to delete this data?');
        //     if (conn) {
        //         return true;
        //     } else {
        //         return false;
        //     }
        // });


    });

})(jQuery);