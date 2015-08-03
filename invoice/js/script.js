$(document).ready(
    function()
    {
        $('#addproduct').click(
            function()
            {
                $('#addproductpanel').removeClass('dynamicshow');
                $('#viewproductspanel').addClass('dynamicshow');
            }
        );

        $('#viewproducts').click(
            function()
            {
                $('#addproductpanel').addClass('dynamicshow');
                $('#viewproductspanel').removeClass('dynamicshow');
            }
        );

    }
);