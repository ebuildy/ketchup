$(document).ready(function() {
    $("#submit-button").click(function () {
        $('button').prop('disabled', true);

        term = $('#search-term').val();

        $.ajax({
            url: 'https://api.zanox.com/json/2011-03-01/products?connectid=43EEF0445509C7205827&items=5&q='+term,
            dataType: 'jsonp',
            success: function (data) {
                console.log("Results No: " + data.items);
                console.log(JSON.stringify(data));

                $.each(data.productItems.productItem, function (key, product) {
                    product.image = product.image.large;
                    console.log(product);
                });

                $('button').prop('disabled', false);
            }
        });

        return false;
    });
});