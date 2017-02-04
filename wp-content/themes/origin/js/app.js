;(function(){
  $(function(){

  	$('.reply-box-topic #bbp_reply_content').attr('rows','3');
  	$('#new-post  legend').text('投稿する');
  	$('#new-post .bbp-form .bbp-form  > legend').remove();
  	$('.bbp-form p br').remove();
  	$('.bbp-form').parent('div').siblings('legend').css('position','relative');
  	$('.bbp-form').parent('div').siblings('legend').css('top','44px');
  	$('#bbp_anonymous_author').attr('placeholder','山田太郎');
  	$('.bbp-author-name').next('br').remove();
  	$('.bbp-form label').text('お名前：');



  });
})();

