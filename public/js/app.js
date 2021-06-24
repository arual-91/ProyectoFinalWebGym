$(".delete-user").click(function() {
    if (confirm('Estas seguro?')) {
        var $element = $(this).parent().parent();
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");

        $.ajax({
            url: "usuarios/" + id,
            type: 'DELETE',
            data: {
                "id": id,
                "_token": token,
            },
            success: function(dataResult) {
                var dataResult = JSON.parse(dataResult);
                if (dataResult.statusCode == 200) {
                    $element.fadeOut().remove();
                }
            }
        });
    }
});

$(".delete-product").click(function() {
    if (confirm('Estas seguro?')) {
        var $element = $(this).parent().parent();
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");

        $.ajax({
            url: "/perfil/productos/delete/" + id,
            type: 'DELETE',
            data: {
                "id": id,
                "_token": token,
            },
            success: function(dataResult) {
                var dataResult = JSON.parse(dataResult);
                if (dataResult.statusCode == 200) {
                    $element.fadeOut().remove();
                }
            }
        });
    }
});

$(".delete-activities").click(function() {
    if (confirm('Estas seguro?')) {
        var $element = $(this).parent().parent();
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");

        $.ajax({
            url: "/perfil/actividades/delete/" + id,
            type: 'DELETE',
            data: {
                "id": id,
                "_token": token,
            },
            success: function(dataResult) {
                var dataResult = JSON.parse(dataResult);
                if (dataResult.statusCode == 200) {
                    $element.fadeOut().remove();
                }
            }
        });
    }
});

$(".delete-sale-profile").click(function() {
    if (confirm('Estas seguro?')) {
        var $element = $(this).parent().parent();
        var $table = $(this).parent().parent().parent();
        var $count = $table.children().length
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");

        $.ajax({
            url: "/perfil/perfil/delete/" + id,
            type: 'DELETE',
            data: {
                "id": id,
                "_token": token,
            },
            success: function(dataResult) {
                var dataResult = JSON.parse(dataResult);
                if (dataResult.statusCode == 200) {
                    $element.empty()
                    if ($count < 2) {
                        $element.append('<td><b>NO HA REALIZADO NINGUN PEDIDO.</b></td>');
                    }
                }
            }
        });
    }
});

$(".delete-sale").click(function() {
    if (confirm('Estas seguro?')) {
        var $element = $(this).parent().parent();
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");

        $.ajax({
            url: "/perfil/ventas/delete/" + id,
            type: 'DELETE',
            data: {
                "id": id,
                "_token": token,
            },
            success: function(dataResult) {
                var dataResult = JSON.parse(dataResult);
                if (dataResult.statusCode == 200) {
                    $element.fadeOut().remove();
                }
            }
        });
    }
});

$(".delete-booking-profile").click(function() {
    if (confirm('Estas seguro?')) {
        var $element = $(this).parent().parent();
        var $table = $(this).parent().parent().parent();
        var $count = $table.children().length
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");

        $.ajax({
            url: "/perfil/perfil/delete_booking/" + id,
            type: 'DELETE',
            data: {
                "id": id,
                "_token": token,
            },
            success: function(dataResult) {
                var dataResult = JSON.parse(dataResult);
                if (dataResult.statusCode == 200) {
                    $element.empty();
                    if ($count < 2) {
                        $element.append('<td><b>NO HAY ACTIVIDADES RESERVADAS.</b></td>');
                    }
                }
            }
        });
    }
});

$(".delete-booking").click(function() {
    if (confirm('Estas seguro?')) {
        var $element = $(this).parent().parent();
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");

        $.ajax({
            url: "/perfil/perfil/delete_booking/" + id,
            type: 'DELETE',
            data: {
                "id": id,
                "_token": token,
            },
            success: function(dataResult) {
                var dataResult = JSON.parse(dataResult);
                if (dataResult.statusCode == 200) {
                    $element.fadeOut().remove();
                }
            }
        });
    }
});

$(".booking-class").click(function() {
    if (confirm('Estas seguro?')) {
        var $element = $(this).parent();
        var $button = $(this);
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");

        $.ajax({
            url: "/perfil/horario/reservar/" + id,
            type: 'POST',
            data: {
                "id": id,
                "_token": token,
            },
            success: function(dataResult) {
                var dataResult = JSON.parse(dataResult);
                if (dataResult.statusCode == 200) {
                    num_ocupation = Number($element.find("span.num-ocupation").html());
                    num_ocupation_max = Number($element.find("span.num-ocupation-max").html());

                    if (num_ocupation < num_ocupation_max) {
                        num_ocupation = num_ocupation + 1
                        $element.find("span.num-ocupation").html(num_ocupation)
                        if (num_ocupation == num_ocupation_max) {
                            $element.append('<p class="full-class">COMPLETA</p>');
                            $button.remove();
                        }
                    }

                }
            }
        });
    }
});