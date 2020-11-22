require('./bootstrap');
const axios = require('axios');

$(function () {

    let typingTimer;
    const doneTypingInterval = 500;
    const modal              = $('#Modal');
    const editForm           = $('#EditForm');
    const search             = $('#search');

    fetch_contact_data();

    function fetch_contact_data(query = '') {
        axios.post('/search', {query: query})
            .then(function (response) {
                let tbody = $('tbody');
                tbody.empty();
                $.each(response.data, function (index, row) {
                    let tr = $('<tr></tr>')
                        .addClass('tw-cursor-pointer')
                        .data('info', row)
                        .html('<td>' + row.first_name +
                            '</td><td>' + row.last_name +
                            '</td><td>' + (row.mobile ?? '') +
                            '</td><td class="tw-hidden sm:tw-table-cell">' + (row.email ?? '') +
                            '</td><td class="tw-hidden md:tw-table-cell">' + (row.post_code ?? '') +
                            '</td><td><button class="delete_btn tw-rounded-full tw-h-6 tw-w-6 tw-bg-red-500 tw-text-white" data-id="' + row.id +
                            '">X</button></td>')
                        .on('click', function () {
                            reset_form();
                            row = $(this).data('info');
                            $('#InputID').val(row.id)
                            $('#InputFirstName').val(row.first_name);
                            $('#InputLastName').val(row.last_name);
                            $('#InputEmail').val(row.email);
                            $('#InputMobile').val(row.mobile);
                            $('#InputPostCode').val(row.post_code);
                            modal.modal('show');
                        })
                    tbody.append(tr)
                })
                $('.delete_btn').on('click', function(e){
                    e.stopPropagation();
                    axios.delete('/delete', {data:{id:$(this).data('id')}})
                        .then(function (response) {
                        $('#search').trigger('keyup')
                    })
                })
            })
    }

    function reset_form() {
        modal.modal('hide');
        $('.alert').remove();
        editForm.trigger('reset');
    }

    search.on('keyup', function () {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(doneTyping, doneTypingInterval);
    });

    search.on('keydown', function () {
        clearTimeout(typingTimer);
    });

    function doneTyping() {
        fetch_contact_data(search.val())
    }

    $('#NewContactBtn').on('click', function () {
        reset_form();
        modal.modal('show')
    })

    editForm.on('submit', function (e) {
        $('.alert').remove();
        e.preventDefault();
        let form = document.querySelector('#EditForm');
        axios.post('/update', new FormData(form)).then(function (response) {
            modal.modal('hide');
            $('#search').trigger('keyup')
        }).catch(function (error) {
            $.each(error.response.data.errors, function (error, value) {
                $('input[name=' + error + ']').after($('<div><div>')
                    .addClass(['alert', 'alert-warning'])
                    .attr('role', 'alert')
                    .text(value[0]))
            })
        });
    })


})
