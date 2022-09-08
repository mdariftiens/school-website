
    var SelectMedia = []

    function mediaList(url = null){
        if (url){
            var dataurl = url;
        }else{
            dataurl = '/admin/media';
        }
        console.log('in medialist function  ', dataurl)

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


    Dropzone.options.myGreatDropzone = { // camelized version of the `id`
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 10000, // MB
        accept: function(file, done) {

            done()

            console.log('in accept ')

            console.log('done', done)
            console.log('file', file)
        },
        init: function() {
            this.on('error', function(file, errorMessage) {
                console.log('errorMessage', errorMessage)
                console.log('file', file)
                alert("error");

            });

            this.on('success', function(file, m) {
                console.log('m', m)
                console.log('file', file)
                console.log('in success ')

                mediaList()

                $('.dz-preview').remove()
                $('.dropzone ').removeClass('dz-started')


            });


        }
    };


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

    /*=====================media pagination=========================*/
    $(document).on('click','#add_media_or_video', function (e){
        $('.selected_feature_image').hide();
        $('.selected_media').show();
        mediaList();
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




    /*=================================feature image section js start::================================*/

    function feature_image_list(url = null){
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
                                <label class="featureImagelabel media_${resp.id}" id="${resp.id}"><img style="width: 100%" src="${resp.url}"></label>
                                <input type="hidden" id="media_${resp.id}" data="${resp.id}" name="featured_image_link" value="${resp.url}">
                            </div>`;
                    });
                }
                jQuery('.media_area .media_content').html(html);

                // $('.selected_feature_image input').each(function(e,el){
                //     $($('.selected_feature_image input').attr('data')).addClass('selectImage');
                // }

                $('.media_'+$('.selected_feature_image input').attr('data')).addClass('selectImage');

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


    $(document).on('click', '.featureImagelabel',function (){
        $('.featureImagelabel').removeClass('selectImage');
        $(this).addClass('selectImage');
        var mediaSelectedIdCheck = $(this).attr('id');
        $('.selected_feature_image .selected_media_content .row').empty();
        $('.selected_feature_image .selected_media_content .row').append($('.media_content .media_' + mediaSelectedIdCheck).parent('.col-md-2').clone());
    });


    /*=====================media pagination=========================*/
    $(document).on('click','.media_pagination ul li a', function (e){
        e.preventDefault();
        feature_image_list();
    })

    /*==================feature image insert===================*/
    $(document).on('click','#feature_image_insert', function (e){
        e.preventDefault();
        $('.from_feature_area').html("");
        $('#featueImageInputFieldOldValue').attr('value','');
        $('.from_feature_area').append($('.selected_feature_image .selected_media_content .row').clone());
        $('#featueImageInputFieldOldValue').attr('value', $('.selected_feature_image .selected_media_content').html());
        $('.modal').modal('hide');
    })


    $(document).on('click','#add_feature_image', function (e){
        feature_image_list();
        $('.selected_media').hide();
        $('.selected_feature_image').show();
    })



