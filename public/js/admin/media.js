$(document).ready(function(){


    mediaList();
    function mediaList(){
        $.ajax({
            // headers: {
            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            // },
            type: 'get',
            url: '/admin/media',
            // contentType: false,
            // processData: false,
            success: function (data) {
                // var data = JSON.parse(data);
                console.log(data);
                var html = '';
                var j = 0;
                if(data.data.length){
                    alert("ok");
                    jQuery.each(data.data, function(i, resp){ j++;
                        html +=`<div class="col-md-2">
                                <label class="mediaImagelabel" for="media_${resp.id}"><img style="width: 100%" src="${resp.url}"></label>
                                <input type="checkbox" id="media_${resp.id}" value="${resp.id}">
                            </div>`;
                    });
                }
                jQuery('.media_area .media_content').html(html);

                var pagination = '';
                if(data.links.length){
                    alert("ok");
                    jQuery.each(data.links, function(i, resp){ j++;
                        pagination +=`<div class="col-md-2">
                                <a href="${resp.url}">${resp.label}</a>
                            </div>`;
                    });
                }
                console.log(pagination);
            },
            error: function (errors) {
                if (errors.status === 400) {
                    alert('something is problem')
                }
            }
        });
    }

    $(document).on('click', '.mediaImagelabel',function (){
        $(this).toggleClass('selectImage');
    });
    // $(document).on('click', '.selectImage',function (){
    //     $(this).removeClass('selectImage');
    // });


});//document ready end
