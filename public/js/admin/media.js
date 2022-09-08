$(document).ready(function(){

    Dropzone.options.myGreatDropzone = { // camelized version of the `id`
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 1000, // MB
        headers: {
            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
        },
        accept: function(file, done) {
            if (file.name == "justinbieber.jpg") {
                done("Naha, you don't.");
            }
            else { done(); }

            console.log('done', done)
            console.log('file', file)
        },
        init: function() {
            this.on('error', function(file, errorMessage) {
                console.log('errorMessage', errorMessage)
                console.log('file', file)
                alert("error");
                // if (file.accepted) {
                //     var mypreview = document.getElementsByClassName('dz-error');
                //     mypreview = mypreview[mypreview.length - 1];
                //     mypreview.classList.toggle('dz-error');
                //     mypreview.classList.toggle('dz-success');
                // }
            });

            this.on('success', function(file, m) {
                console.log('m', m)
                console.log('file', file)
                mediaList();
                // window.location = window.location;
                // if (file.accepted) {
                //     var mypreview = document.getElementsByClassName('dz-error');
                //     mypreview = mypreview[mypreview.length - 1];
                //     mypreview.classList.toggle('dz-error');
                //     mypreview.classList.toggle('dz-success');
                // }
            });
        }
    };

    var SelectMedia = []

    function mediaList(url = null){
        if (url){
            var dataurl = url;
        }else{
            dataurl = '/admin/media';
        }

        $.ajax({
            type: 'get',
            url: dataurl,
            success: function (data) {
                var html = '';
                var j = 0;
                console.log(data);
                /*===============media showing code==============*/
                if(data.data.length){
                    jQuery.each(data.data, function(i, resp){ j++;
                        html +=`<div class="col-md-2" data-id="media_${resp.id}">
                                <label class="mediaImagelabel media_${resp.id}" id="${resp.id}"><img style="width: 100%" src="${resp.url}"></label>
                                <input type="hidden" id="media_${resp.id}" name="mediaids[]" value="${resp.id}">
                            </div>`;
                    });
                }
                jQuery('.media_area .media_content').html(html);

                $('.selected_media input').each(function(e,el){
                    $('.media_'+el.value).addClass('selectImage');
                })

                /*===============pagination showing code==============*/
                var pagination = '';
                if(data.links.length){
                    jQuery.each(data.links, function(i, resp){ j++;
                        pagination +=`<ul>
                                    <li><a href="${resp.url}">${resp.label}</a></li>
                                </ul>`;
                    });
                }
                jQuery('.media_area .media_pagination').html(pagination);
            },

            error: function (errors) {
                if (errors.status === 400) {
                    alert('something is problem')
                }
            }
        });
    }

        mediaList();

    $(document).on('click', '.mediaImagelabel',function (){
        $(this).toggleClass('selectImage');
        var mediaSelectedIdCheck = $(this).attr('id');

        if ($('.selected_media '+'.media_'+mediaSelectedIdCheck).length == 0) {
            $('.selected_media .selected_media_content .row').append($('.media_content .media_' + mediaSelectedIdCheck).parent('.col-md-2').clone());
        }else{
            $('.selected_media '+'.media_'+mediaSelectedIdCheck).parent('.col-md-2').remove();
        }
    });


    /*=====================media pagination=========================*/
    $(document).on('click','.media_pagination ul li a', function (e){
        e.preventDefault();
        mediaList($(this).attr('href'));
    })

    /*==================media insert===================*/
    $(document).on('click','#media_insert', function (e){
        e.preventDefault();
        $('.from_media_area').html("");
        $('#inputFieldOldValue').attr('value','');
        $('.from_media_area').append($('.selected_media .selected_media_content .row').clone());
        $('#inputFieldOldValue').attr('value', $('.selected_media .selected_media_content').html());
        $('.modal').modal('hide');
    })



});//document ready end
