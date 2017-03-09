/*
 * share-selection: Medium like popover menu to share on Twitter, Facebook, LinkedIn or by email any text selected on the page 
 *
*/

(function($) {

  var SelectionSharer = function(options) {

    var self = this;
    
    options = options || {};
    if(typeof options == 'string') options = { elements: options };
	
	this.text = options.text || '';
    this.sel = null;
    this.textSelection='';
    this.htmlSelection='';
    this.postId=null;
    
    this.appId = $('meta[property="fb:app_id"]').attr("content") || $('meta[property="fb:app_id"]').attr("value");
    this.url2share = $('meta[property="og:url"]').attr("content") || $('meta[property="og:url"]').attr("value") || window.location.href;


    this.getSelectionText = function(sel) {
        
        var html = "", text = "";
        var sel = sel || window.getSelection();
        
        if (sel.rangeCount>0) {
        
	        var range = sel.getRangeAt(0);
	        //var span = document.createElement('span');
	        //span.className = "selected";
			//range.surroundContents(span);
	        
	        if (sel.rangeCount) {
	            var container = document.createElement("div");
	            for (var i = 0, len = sel.rangeCount; i < len; ++i) {
	                container.appendChild(sel.getRangeAt(i).cloneContents());
	            }
	            text = container.textContent;
	            html = container.innerHTML;
			}
	        
	        self.textSelection = text;
	        self.htmlSelection = html || text;
	
	        // Update the ID of the selected post.
	        var selectionContainer = $(sel.anchorNode).parents('article');
	        var postId = null;
	        if (selectionContainer.length) {
	          var postIdentifier = selectionContainer.attr('class').match(/post-(\d+)/);
	          if (postIdentifier) {
	            postId = postIdentifier[1];
	          }
	        }
	
	        self.postId = postId;
        
        }

        return text;
    };

    this.selectionDirection = function(selection) {
      var sel = selection || window.getSelection();
      var range = document.createRange();
      if(!sel.anchorNode) return 0;
      range.setStart(sel.anchorNode, sel.anchorOffset);
      range.setEnd(sel.focusNode, sel.focusOffset);
      var direction = (range.collapsed) ? "backward" : "forward";
      if(range.detach()) range.detach();
      return direction;
    };

    this.showPopunder = function(e,show) {
	  
	  if(!show) show = false;
	  
      self.popunder = self.popunder || document.getElementById('selectionSharerPopunder');
      if(self.popunder){
		self.hide(self.popunder);
		return;	
	  }

      var sel = window.getSelection(); 
      var selection = self.getSelectionText(sel);

      if(sel.isCollapsed || selection.length < 10 || !selection.match(/ /))
        return self.hidePopunder();

      if(self.popunder.classList.contains("fixed"))
        return self.popunder.style.bottom = 0;

      var range = sel.getRangeAt(0);
      var parentEl = window.getSelection().anchorNode.parentElement.localName;
      
      if(show){ // begin show
      
      var span = document.createElement('span');
      span.className = "shared";
      
      var span_twcount = document.createElement('span');
	  span_twcount.className = "sharedSharesTwitter";
	  var span_fbcount = document.createElement('span');
	  span_fbcount.className = "sharedSharesFacebook";
	  var span_licount = document.createElement('span');
	  span_licount.className = "sharedSharesLinkedIn";	    
	  var span_emcount = document.createElement('span');
	  span_emcount.className = "sharedSharesEmail";
		  
	  if(parentEl=='p'){
		range.surroundContents(span);
		jQuery('.shared').each(function(index){
			if(jQuery('.sharedSharesTwitter',this).length == 0){
		  		jQuery(span_twcount).appendTo(this);
		  		jQuery(span_fbcount).appendTo(this);
		  		jQuery(span_licount).appendTo(this);
		  		jQuery(span_emcount).appendTo(this);
			}
		});
      }
      
      } // end show
       
      var node = range.endContainer.parentNode; // The <p> where the selection ends

      // If the popunder is currently displayed
      if(self.popunder.classList.contains('show')) { 
        // If the popunder is already at the right place, we do nothing
        if(Math.ceil(self.popunder.getBoundingClientRect().top) == Math.ceil(node.getBoundingClientRect().bottom))
          return;

        // Otherwise, we first hide it and the we try again
        return self.hidePopunder(self.showPopunder);
      }

      if(node.nextElementSibling) {
        // We need to push down all the following siblings 
        self.pushSiblings(node);
      }
      else {
        // We need to append a new element to push all the content below 
        if(!self.placeholder) {
          self.placeholder = document.createElement('div');
          self.placeholder.className = 'selectionSharerPlaceholder';
        }
       
        // If we add a div between two <p> that have a 1em margin, the space between them
        // will become 2x 1em. So we give the placeholder a negative margin to avoid that
        var margin = window.getComputedStyle(node).marginBottom;
        self.placeholder.style.height = margin;
        self.placeholder.style.marginBottom = (-2 * parseInt(margin,10))+'px';
        node.parentNode.insertBefore(self.placeholder);
      }

      // scroll offset
      var offsetTop = window.pageYOffset + node.getBoundingClientRect().bottom;
      self.popunder.style.top = Math.ceil(offsetTop)+'px';

      setTimeout(function() {
        if(self.placeholder) self.placeholder.classList.add('show');
        self.popunder.classList.add('show');
      },0);

    };

    this.pushSiblings = function(el) {
      while(el=el.nextElementSibling) { el.classList.add('selectionSharer'); el.classList.add('moveDown'); }
    };

    this.hidePopunder = function(cb) {
      cb = cb || function() {};
      
	  jQuery('.inboundrocket-ss-branding').hide();
      // remove span when hidden
      jQuery('p.getSelectionText').find('span').contents().unwrap();
      jQuery('p.selectionShareable').find('span').remove();

      if(self.popunder == "fixed") {
        self.popunder.style.bottom = '-50px';
        return cb();
      }

      self.popunder.classList.remove('show');
      if(self.placeholder) self.placeholder.classList.remove('show');
      // We need to push back up all the siblings
      var els = document.getElementsByClassName('moveDown');
      while(el=els[0]) {
          el.classList.remove('moveDown');
      }

      // CSS3 transition takes 0.6s
      setTimeout(function() {
        if(self.placeholder) document.body.insertBefore(self.placeholder);
        cb();
      }, 600);

    };

	this.show_text = function(parentEl) {
		self.popunder = self.popunder || document.getElementById('selectionSharerPopunder'); 
		if(self.popunder){
			self.hide(self.popunder);	
		}
		
		jQuery('.inboundrocket-ss-branding').fadeIn();
		
		// scroll offset
		self.$popover.removeClass("anim").css("top", parentEl.pageY).css("left", parentEl.pageX).show();
          setTimeout(function() {
            self.$popover.addClass("anim").css("top", parentEl.pageY-self.$popover.height()-10);
          }, 0);
          
    }

    this.show = function(e,s) {
      //setTimeout(function() {  
	      
	    if(!s) s = false;
        var sel = window.getSelection();
        var selection = self.getSelectionText(sel);
        
        if(!sel.isCollapsed && selection && selection.length>10 && selection.match(/ /)) {
	        
          var range = sel.getRangeAt(0);
          var parentEl = window.getSelection().anchorNode.parentElement.localName;
          
          if(s){ // begin show
          
          var span = document.createElement('span');
		  span.className = "shared";
		  
		  var span_twcount = document.createElement('span');
		  span_twcount.className = "sharedSharesTwitter";
		  var span_fbcount = document.createElement('span');
		  span_fbcount.className = "sharedSharesFacebook";
		  var span_licount = document.createElement('span');
		  span_licount.className = "sharedSharesLinkedIn";		  
		  var span_emcount = document.createElement('span');
		  span_emcount.className = "sharedSharesEmail";
		  
		  if(parentEl=='p'){
			  range.surroundContents(span);
			  jQuery('.shared').each(function(index){
			  	if(jQuery('.sharedSharesTwitter',this).length == 0){
		  			jQuery(span_twcount).appendTo(this);
		  			jQuery(span_fbcount).appendTo(this);
		  			jQuery(span_licount).appendTo(this);
		  			jQuery(span_emcount).appendTo(this);
		  		}
		  	  });
          }
          
          } // end show
          
          var topOffset = range.getBoundingClientRect().top - 5;
          var top = topOffset + window.pageYOffset - self.$popover.height();
          var left = range.getBoundingClientRect().left;
          if(e) {
            left = e.pageX;
          }
          /*else {            
            
            var obj = sel.anchorNode.parentNode;
            left += obj.offsetWidth / 2;
            do {
              left += obj.offsetLeft;
            }
            while(obj = obj.offsetParent);
          }*/
          switch(self.selectionDirection(sel)) {
            case 'forward':
              left -= self.$popover.width();
              break;
            case 'backward':
              left += self.$popover.width();
              break;
          }
          
          jQuery('.inboundrocket-ss-branding').fadeIn();
          
          self.$popover.removeClass("anim").css("top", top+10).css("left", left).show();
          setTimeout(function() {
            self.$popover.addClass("anim").css("top", top);
          }, 0);
        }
      //}, 10);
    };

    this.hide = function(e) {
      //self.$popover.hide();
      //jQuery('p.selectionShareable').find('span').contents().unwrap();
      var sel = window.getSelection && window.getSelection();
      if(sel && sel.rangeCount > 0){
      	var range = sel.getRangeAt(0);
      	var firstchild = !range.startContainer.firstChild ? false : range.startContainer.firstChild;
      	if(!firstchild) {
	      	 jQuery('#selectionSharerPopover').hide();
		  	 jQuery('.inboundrocket-ss-branding').hide();
		}
      }
    };

    this.smart_truncate = function(str, n){
        if (!str || !str.length) return str;
        var toLong = str.length>n,
            s_ = toLong ? str.substr(0,n-1) : str;
        s_ = toLong ? s_.substr(0,s_.lastIndexOf(' ')) : s_;
        return  toLong ? s_ +'...' : s_;
    };

    this.getRelatedTwitterAccounts = function() {
      var usernames = [];

      var creator = $('meta[name="twitter:creator"]').attr("content") || $('meta[name="twitter:creator"]').attr("value");
      if(creator) usernames.push(creator);


      // We scrape the page to find a link to http(s)://twitter.com/username
      var anchors = document.getElementsByTagName('a');
      for(var i=0, len=anchors.length;i<len;i++) { 
        if(anchors[i].attributes.href && typeof anchors[i].attributes.href.value == 'string') {
          var matches = anchors[i].attributes.href.value.match(/^https?:\/\/twitter\.com\/([a-z0-9_]{1,20})/i) 
          if(matches && matches.length > 1 && ['widgets','intent'].indexOf(matches[1])==-1)
            usernames.push(matches[1]); 
        } 
      }
      
      // if nothing found add the username from the wordpress settings  

      if(usernames.length > 0)
        return usernames.join(',');
      else
        return '';
    };

    this.updateShareCount = function(postId, text, type) {
      $.ajax({
        url: inboundrocket_ss_js.ajaxurl,
        type: 'post',
        dataType: 'json',
        data: {
	      nonce: inboundrocket_ss_js.nextNonce,
          action: 'selection_sharer_track',
          postid: postId,
          text: text,
          type: type
        }
      });
    };
    
    this.shareTwitter = function(e) {
      e.preventDefault(); 

      if(!self.viaTwitterAccount) {
        self.viaTwitterAccount = $('meta[name="twitter:site"]').attr("content") || $('meta[name="twitter:site"]').attr("value") || "";
        self.viaTwitterAccount = self.viaTwitterAccount.replace(/@/,'');
      }

      if(!self.relatedTwitterAccounts) {
        self.relatedTwitterAccounts = self.getRelatedTwitterAccounts();
      }
	  // add suffixes to text (include spaces)
	  var short_url = null;
	  var text;
	  var tweet;
	  var addon;
	  var suffix;
	  var name;
	  
	  jQuery.ajax({
		url: inboundrocket_ss_js.ajaxurl,
		type: 'post',
		async: false,
		dataType: 'json',
		data: {
			url: location.href,
			type: 'twitter',
			nonce: inboundrocket_ss_js.nextNonce,
			action: 'selection_sharer_shorturl',
        },
		success: function(result){
			short_url = result.shorturl;
		}
	  });
	  
	  jQuery.ajax({
        url: inboundrocket_ss_js.ajaxurl,
        type: 'post',
        async: false,
        dataType: 'json',
        data: {
	      nonce: inboundrocket_ss_js.nextNonce,
          action: 'selection_sharer_settings',
        },
        success: function(result){
	        text = self.textSelection.trim();
	        
	        if(!text) text = self.text;
	        
	        suffix = '';
	        if(result.ir_ss_twitter_username) name = " via @"+result.ir_ss_twitter_username;
			if(result.ir_ss_tweet_suffix) suffix += " "+result.ir_ss_tweet_suffix;
	        
	        addon = '';
	        if(text.length<140 && suffix!=null && name!==undefined) {
		        addon = name+suffix;
		    } else if(suffix!=null && name===undefined) {
			    addon = suffix;
	        } else if(name!=undefined) {
		        addon = name;
	        }
			
			if(text.length>140 && addon==null) {
	        	tweet = self.smart_truncate(text, 120);
	        } else if(text.length>140 && addon!=null) {
		        var max_char = text.length-(text.length-addon.length);
		        tweet = self.smart_truncate(text, 114);
	        } else if(text.length<140 && addon!=null) {
		        tweet = self.smart_truncate(text, 120);
	        } else if(text.length<140 && addon==null) {
		        tweet = self.smart_truncate(text, 114);
	        }
	        
	        tweet = tweet+addon;
	    }
      });
      
      var url = 'http://twitter.com/intent/tweet?text='+encodeURIComponent(tweet)+'&related='+self.getRelatedTwitterAccounts()+'&url='+encodeURIComponent(short_url);
      
      // We only show the via @twitter:site if we have enough room
      if(self.viaTwitterAccount && text.length < (114-self.viaTwitterAccount.length))
        url += '&via='+self.viaTwitterAccount;

      var w = 640, h=440;
      var left = (screen.width/2)-(w/2);
      var top = (screen.height/2)-(h/2)-100;
      window.open(url, "share_twitter", 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
      self.hide();
      
      self.updateShareCount(self.postId, tweet, 'twitter');

      return false;
    };
    
	this.shareFacebook = function(e) {
	    e.preventDefault();
	    var text = self.htmlSelection.replace(/<p[^>]*>/ig,'\n').replace(/<\/p>|  /ig,'').trim();
	    var url = 'https://www.facebook.com/dialog/feed?' +
					'app_id='+self.appId +
					'&display=popup'+
					'&caption='+encodeURIComponent(text)+
					'&link='+encodeURIComponent(self.url2share)+
					'&href='+encodeURIComponent(self.url2share)+
					'&redirect_uri='+encodeURIComponent(self.url2share);
	    var w = 640, h=440;
	    var left = (screen.width/2)-(w/2);
	    var top = (screen.height/2)-(h/2)-100;
	
	    window.open(url, "share_facebook", 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
	};
    
    this.shareLinkedIn = function(e) {
        e.preventDefault();
         var text = self.htmlSelection.replace(/<p[^>]*>/ig, "\n").replace(/<\/p>|  /ig, "").trim();
         var url = "https://www.linkedin.com/shareArticle?mini=true&url=" + encodeURIComponent(self.url2share) + "&title=" + encodeURIComponent(text);
         var w = 640, h=440;
		 var left = (screen.width/2)-(w/2);
		 var top = (screen.height/2)-(h/2)-100;
         window.open(url, "share_linkedin", 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
    }
        
    this.shareEmail = function(e) {
	    
	  var short_url = null;
	  var text = self.htmlSelection.replace(/<p[^>]*>/ig,'\n').replace(/<\/p>|  /ig,'').trim();
	  
	  jQuery.ajax({
		url: inboundrocket_ss_js.ajaxurl,
		type: 'post',
		async: false,
		dataType: 'json',
		data: {
			url: location.href,
			type: 'email',
			nonce: inboundrocket_ss_js.nextNonce,
			action: 'selection_sharer_shorturl',
        },
		success: function(result){
			short_url = result.shorturl;
		}
	  });
	  
      var email = {};
      email.subject = encodeURIComponent("Quote from "+document.title);
      
      email.body = encodeURIComponent("“"+text+"”")+"%0D%0A%0D%0AFrom: "+document.title+"%0D%0A"+short_url;
      jQuery(this).attr("href","mailto:?subject="+email.subject+"&body="+email.body);
      self.hide();
      
      self.updateShareCount(self.postId, text, 'email');
      
      return true;
    };
    
    this.render = function() {
      var popoverHTML =  '<div class="selectionSharer" id="selectionSharerPopover" style="position:absolute;">'
                       + '  <div id="selectionSharerPopover-inner">'
                       + '    <ul>'
                       + '      <li><a class="action tweet" href="" title="Share this selection on Twitter" target="_blank">Tweet</a></li>'  
					   + '      <li><a class="action facebook" href="" title="Share this selection on Facebook" target="_blank">Facebook</a></li>' 
					   + '      <li><a class="action linkedin" href="" title="Share this selection on LinkedIn" target="_blank">LinkedIn</a></li>'                    
                       + '      <li><a class="action email" href="" title="Share this selection by email" target="_blank"><svg width="20" height="20"><path stroke="#FFF" stroke-width="6" d="m16,25h82v60H16zl37,37q4,3 8,0l37-37M16,85l30-30m22,0 30,30"/></svg></a></li>'
                       + '    </ul>'
                       + '  </div>'
                       + '  <div class="selectionSharerPopover-clip"><span class="selectionSharerPopover-arrow"></span></div>'
                       + '</div>';

      var popunderHTML = '<div id="selectionSharerPopunder" class="selectionSharer">'
                       + '  <div id="selectionSharerPopunder-inner">'
                       + '    <label>Share this selection</label>'
                       + '    <ul>'
                       + '      <li><a class="action tweet" href="" title="Share this selection on Twitter" target="_blank">Tweet</a></li>'
                       + '      <li><a class="action facebook" href="" title="Share this selection on Facebook" target="_blank">Facebook</a></li>'
                       + '      <li><a class="action linkedin" href="" title="Share this selection on LinkedIn" target="_blank">LinkedIn</a></li>'                     
                       + '      <li><a class="action email" href="" title="Share this selection by email" target="_blank"><svg width="20" height="20"><path stroke="#FFF" stroke-width="6" d="m16,25h82v60H16zl37,37q4,3 8,0l37-37M16,85l30-30m22,0 30,30"/></svg></a></li>'
                       + '    </ul>'
                       + '  </div>'
                       + '</div>';

      self.$popover = $(popoverHTML);
      self.$popover.find('a.tweet').click(self.shareTwitter);
      self.$popover.find('a.facebook').click(self.shareFacebook);
      self.$popover.find('a.linkedin').click(self.shareLinkedIn);
      self.$popover.find('a.email').click(self.shareEmail);

      $('body').append(self.$popover);

      /*self.$popunder = $(popunderHTML);
      self.$popunder.find('a.tweet').click(self.shareTwitter);
      self.$popunder.find('a.facebook').click(self.shareFacebook);
      self.$popunder.find('a.linkedin').click(self.shareLinkedIn);
      self.$popunder.find('a.email').click(self.shareEmail);
      $('body').append(self.$popunder);*/
      
      if (self.appId && self.url2share){
      	$(".selectionSharer a.facebook").css('display','inline-block');
	  }
    };

    this.setElements = function(elements) {
      if(typeof elements == 'string') elements = $(elements);
      self.$elements = elements instanceof $ ? elements : $(elements);
      self.$elements.mouseup(self.show).mousedown(self.hide).addClass("selectionShareable");

      self.$elements.bind('touchstart', function(e) {
        self.isMobile = true;
      });

      document.onselectionchange = self.selectionChanged;
    };

    this.selectionChanged = function(e) {
      if(!self.isMobile) return;
	  
      if(self.lastSelectionChanged) {
        clearTimeout(self.lastSelectionChanged);
      }
      self.lastSelectionChanged = setTimeout(function() {
        self.showPopunder(e);
      }, 300);
    };

    this.render();

    if(options.elements) {
      this.setElements(options.elements);
    }

  };

  $.fn.justtext = function() {
    return $(this)  .clone()
            .children()
            .remove()
            .end()
            .text();
  };

  // jQuery plugin 
  // Usage: $( "p" ).selectionSharer();
  $.fn.selectionSharer = function() {
    var sharer = new SelectionSharer();
    sharer.setElements(this);
    return this; 
  };
  
  $.fn.selectionSharerHide = function( options ) {
	  options.e.hide();
  };
  
  $.fn.selectionSharerShow = function( options ) {
	options.sharer.text = options.text;
    options.sharer.show_text(options.e);
  };

  // For AMD / requirejs
  // Usage: require(["selection-sharer!"]); 
  //     or require(["selection-sharer"], function(selectionSharer) { var sharer = new SelectionSharer('p'); });
  if(typeof define == 'function') {
    define(function() { 
      SelectionSharer.load = function (name, req, onLoad, config) {
        var sharer = new SelectionSharer();
        sharer.setElements('p');
        onLoad();
      };
      return SelectionSharer; 
    });

  }
  else {
    // Registering SelectionSharer as a global
    // Usage: var sharer = new SelectionSharer('p');
    window.SelectionSharer = SelectionSharer;
  }
  
})(jQuery);

if(inboundrocket_ss_js.enable_frontend==1){
	jQuery(document).ready(function($){
		var sharer = new SelectionSharer('p');
		$.ajax({
			url: inboundrocket_ss_js.ajaxurl,
			type: 'post',
			dataType: 'json',
			data: {
				nonce: inboundrocket_ss_js.nextNonce,
				action: 'selection_sharer_gettext',
	        },
			success: function(result){
				$.each(result, function(i, val) {
					$('*:contains("'+val.share+'")').each(function(){
					    if($(this).children().length < 1) {
					        $(this).html( $(this).text().replace(val.share,'<span class="shared" data-id="'+val.share_id+'" data-text="'+val.share+'">'+val.share+'<span class="sharedSharesTwitter">'+val.twcount+'</span><span class="sharedSharesFacebook">'+val.fbcount+'</span><span class="sharedSharesLinkedIn">'+val.licount+'</span><span class="sharedSharesEmail">'+val.emcount+'</span></span>') );
					    }
					});
				});
			}
		});

		$(document.body).on('click','.shared',function(e) {
			$options = {
				'e' : e,
				'sharer' : sharer,
				'id' : $('.shared').data("id"),
				'text' : $('.shared').data("text")
			}
			$('.shared').selectionSharerShow( $options );
		});

	});
}
