event.preventDefault();
        var itemName = $('#meal_name').val();
        var itemCategory = $('#category_id').val();
        var itemPrice = $('#meal_price').val();
        var itemStatus = $('#meal_status').val();
        var itemRecommended = $('#recommended').val();
        var extension = $('#meal_image').val().split('.').pop().toLowerCase();
        if(extension !== '')
        {
            if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) === -1)
            {
                alert("Invalid Image File");
                $('#meal_image').val('');
                return false;
            }
        }
        if(itemName !== '' && itemCategory !== '' && itemPrice !== '' && itemStatus !== '' && itemRecommended !== '' )
        {
            $.ajax({
                url:"php_scripts/insert_meal.php",
                method:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data)
                {
                    // alert(data);
                    $('#meal_form')[0].reset();
                    $('#mealModal').modal('hide');
                    dataTable.ajax.reload();
                    toastr.success('Meal item successfully added.', 'Success!');
                }
            });
        }
        else
        {
            alert("All Fields are Required");
        }