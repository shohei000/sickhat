;(function(){
  $(function(){
    var url = location.href;
    var winH = $(window).height();

    $('.menu-trigger').on('click',function(){
      $(this).toggleClass('active');
      $('.side-area').slideToggle();
    });

    $('.head-action-create,.head-action-search').on('click',function(){
      $('.side-area,.menu-trigger').hide();
    });

    $('.toukou-btn').on('click',function(){
      $(this).hide();
      $('.topic-page .reply-box-topic').show();
      $('.toukou-close').show();
    });

    $('.toukou-close').on('click',function(){
      $(this).hide();
      $('.topic-page .reply-box-topic').hide();
      $('.toukou-btn').show();
    });

    $('.type-reply .bbp-reply-author:last').attr('id','last-toukou');



    //カテゴリー内のトピックを出す
    $('.forum-list-ttl').on('click',function(){
      $(this).toggleClass('active');
      $('.forum-page #bbpress-forums .bbp-topics').stop().slideToggle();
    });

    //空の場合「匿名」を入れる
    $('#bbp_topic_submit,#bbp_reply_submit').on('click',function(){
      var nameVal = $('#bbp_anonymous_author').val();
      var conTxt = $('#bbp_topic_content').val();
      var byoumei = $('#bbp_topic_title').val();
      if(nameVal == ""){
        $('#bbp_anonymous_author').val("匿名");
      }
      if(conTxt == ""){
        $('#bbp_topic_content').val(byoumei + "でお悩みの方の為の空間です。");
      }
    });





    //モーダル
    $('.head-action-search').on('click',function(){
      $('.modal-wrapper--search').stop().fadeIn(200);
    });
    $('.head-action-create').on('click',function(){
      $('.modal-wrapper--forum').stop().fadeIn(200);
    });
    $('.modal-back,.modal-close').on('click',function(){
      $('.modal-wrapper').stop().fadeOut(200);
      $('.menu-trigger').show().removeClass('active');
    });
    if($(window).width() > 768 ){
      $('.modal-wrapper--forum').css('height',winH);
    }

      

    
    if(url.match(/topic/)){
      $('body').addClass('topic-page');
    	$('.reply-box-topic #bbp_reply_content').attr('rows','3');
      $('.reply-box-topic #bbp_reply_content').attr('cols','120');
    	$('#new-post legend').text('投稿する');
    	$('#new-post .bbp-form .bbp-form  > legend').remove();
    	$('.bbp-form p br').remove();
    	$('.bbp-form').parent('div').siblings('legend').css('position','relative');
    	$('.bbp-form').parent('div').siblings('legend').css('top','44px');
    	$('#bbp_anonymous_author').attr('placeholder','山田太郎');
    	$('.bbp-author-name').next('br').remove();
    	$('.bbp-form label').text('お名前：');
      if($(window).width() < 768 ){
        $('.reply-box-topic #bbp_reply_content').attr('rows','2');
      }
    }
    if(url.match(/forum/)){
      $('body').addClass('forum-page');
      $('body').addClass('bar-bottom');
      $('#bbpress-forums fieldset.bbp-form label[for="bbp_topic_title"]').text('sick(病名)');
      $('#bbpress-forums fieldset.bbp-form label[for="bbp_anonymous_author"]').text('お名前');
      $('label[for="bbp_anonymous_author"] + br').remove();
      $('label[for="bbp_topic_title"] + br').remove();
      $('.forum-page #bbp_anonymous_author').attr('placeholder','お名前');
      $('.forum-page #bbp_topic_title').attr('placeholder','病名を入力してください');
      $('#bbp_anonymous_author').attr('size','20');
      $('#bbp_topic_title').attr('size','70');
      $('.forum-page #bbp_topic_content').attr('placeholder','この病気の説明を書いてください');
      $('.forum-page #bbp_topic_submit').text('作成する');
      $('.bbp-forum-description').text('現在sick(病名)はありません。');
      $('.forum-page #bbp_topic_content').attr('rows','6');
    }
    if(url.match(/search/)){
      $('body').addClass('fsearch-page');
      $('.bbp-template-notice p').text('該当の病気は見つかりませんでした。');
      $('.entry-title').text('').css("height","32px");
    }
    if(url.match(/info\/$/)){
      $('body').addClass('top-page');
    }





  });
})();
