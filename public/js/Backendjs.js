




        $(document).ready(function () {

           
        $('.filterable .btn-filter').click(function () {
            var $panel = $(this).parents('.filterable'),
                $filters = $panel.find('.filters input'),
                $tbody = $panel.find('.table tbody');
            if ($filters.prop('disabled') == true) {
                $filters.prop('disabled', false);
                $filters.first().focus();
            } else {
                $filters.val('').prop('disabled', true);
                $tbody.find('.no-result').remove();
                $tbody.find('tr').show();
            }
        });



        $('.filterable .filters input').keyup(function (e) {
            /* Ignore tab key */
            var code = e.keyCode || e.which;
            if (code == '9') return;
            /* Useful DOM data and selectors */
            var $input = $(this),
                inputContent = $input.val().toLowerCase(),
                $panel = $input.parents('.filterable'),
                column = $panel.find('.filters th').index($input.parents('th')),
                $table = $panel.find('.table'),
                $rows = $table.find('tbody tr');
            /* Dirtiest filter function ever ;) */
            var $filteredRows = $rows.filter(function () {
                var value = $(this).find('td').eq(column).text().toLowerCase();
                return value.indexOf(inputContent) === -1;
            });
            /* Clean previous no-result if exist */
            $table.find('tbody .no-result').remove();
            /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
            $rows.show();
            $filteredRows.hide();
            /* Prepend no-result row if all rows are filtered */
            if ($filteredRows.length === $rows.length) {
                $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="' + $table.find('.filters th').length + '">No result found</td></tr>'));
            }
        });
    });




    $(document).ready(function () {
                    var activeSystemClass = $('.list-group-item.active');

                    //something is entered in search form
                    $('#system-search').keyup(function () {
                        var that = this;
                        // affect all table rows on in systems table
                        var tableBody = $('.table-list-search tbody');
                        var tableRowsClass = $('.table-list-search tbody tr');
                        $('.search-sf').remove();
                        tableRowsClass.each(function (i, val) {

                            //Lower text for case insensitive
                            var rowText = $(val).text().toLowerCase();
                            var inputText = $(that).val().toLowerCase();
                            if (inputText != '') {
                                $('.search-query-sf').remove();
                                tableBody.prepend('<tr class="search-query-sf"><td colspan="14"><strong>Searching for: "'
                                    + $(that).val()
                                    + '"</strong></td></tr>');
                            }
                            else {
                                $('.search-query-sf').remove();
                            }

                            if (rowText.indexOf(inputText) == -1) {
                                //hide rows
                                tableRowsClass.eq(i).hide();

                            }
                            else {
                                $('.search-sf').remove();
                                tableRowsClass.eq(i).show();
                            }
                        });
                        //all tr elements are hidden
                        if (tableRowsClass.children(':visible').length == 0) {
                            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="14">No entries found.</td></tr>');
                        }
                    });
                });



        