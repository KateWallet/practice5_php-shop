$('.modal-content').on('click', '.btn-next', function () {
    $.ajax({
        url: '/cart/order',
        type: 'GET',
        success: function (res) {
            $('#order .modal-content').html(res);
            $('#cart').modal('hide');
            $('#order').modal('show');
        },
        error: function () {
            alert('Ошибка');
        }
    })
})

function openCart(event) {
    event.preventDefault();
    $.ajax({
        url: '/cart/open',
        type: 'GET',
        success: function (res) {
            $('#cart .modal-content').html(res);
            $('#cart').modal('show');
        },
        error: function () {
            alert('Ошибка');
        }
    })
}

function clearCart(event) {
    if (confirm('Вы уверены, что хотите очистить корзину?')) {
        event.preventDefault();
        $.ajax({
            url: '/cart/clear',
            type: 'GET',
            success: function (res) {
                $('#cart .modal-content').html(res);
                $('.menu-quantity').html('(0)');
            },
            error: function () {
                alert('Ошибка');
            }
        })
    }
}

$('.product-button__add').on('click', function (event) {
    event.preventDefault();
    let name = $(this).data('name');
    console.log(name);

    $.ajax({
        url: '/cart/add',
        data: {name: name},
        type: 'GET',
        success: function (res) {
            $('#cart .modal-content').html(res);
            $('.menu-quantity').html('(' + $('.total-quantity').html() + ')');
        },
        error: function () {
            alert('Ошибка');
        }
    })
})

$('.modal-content').on('click', '.btn-close', function () {
    $('#cart').modal('hide');
})

$('.modal-content').on('click', '.delete', function () {
    let id = $(this).data('id');
    $.ajax({
        url: '/cart/delete',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            $('#cart .modal-content').html(res);
            if ($('.total-quantity').html()) {
                $('.menu-quantity').html('(' + $('.total-quantity').html() + ')');
            } else {
                $('.menu-quantity').html('(0)');
            }
        },
        error: function () {
            alert('Ошибка');
        }
    })
})