<div id="breaking-news-container">
  <div id="breaking-news-colour" class="slideup animated">
    
  </div>  
    <a class="breaking-news-headline delay-animated2 fadein marquee" style="color: red;font-size: 17px">Notice*: Intern have to confirm their details complusary,after that he/she is able to see all other Information about their Internship.
    </a>  
</div>  
<style type="text/css">
.breaking-news-headline {
  display: block;
  position: absolute;
  font-family: arial;
  font-size: 13px;
  margin-top: -22px;
  color: white;
  margin-left: 150px;
  
}

.breaking-news-title {
  background-color:white;
  display: block;
  height: 20px;  
  width: 90px;
  font-family: arial;
  font-size: 11px;
  position: absolute; 
  top: 0px;
  margin-top: 0px;
  margin-left: 20px;
  padding-top: 12px;
  padding-left: 10px;
  z-index: 3;
  &:before {
    content:"";
    position: absolute;
    display: block;
    width: 0px;
    height: 0px;
    top: 0;
    left: -12px;
    border-left:12px solid transparent;
    border-right: 0px solid transparent;
    border-bottom: 30px solid #FFEA00;
  }
  &:after {
    content:"";
    position: absolute;
    display: block;
    width: 0px;
    height: 0px;
    right: -12px;
    top: 0;
    border-right:12px solid transparent;
    border-left: 0px solid transparent;
    border-top: 30px solid #FFEA00;
  }
}

#breaking-news-colour {
  height: 30px;
  width: 694px;
  background-color:white;
}

#breaking-news-container {
  height: 30px;
  width: 794px;
  overflow: hidden;
  position: absolute;
  &:before {
    content: "";
    width: 30px;
    height: 30px;
    background-color: #3399FF;
    position: absolute;
    z-index: 2;
  }
}

.animated {
  -webkit-animation-duration: 0.2s;
  -webkit-animation-fill-mode: both;
  -moz-animation-duration: 0.2s;
  -moz-animation-fill-mode: both;
  -webkit-animation-iteration-count: 1;
  -moz-animation-iteration-count: 1;
}

.delay-animated {
  -webkit-animation-duration: 0.4s;
  -webkit-animation-fill-mode: both;
  -moz-animation-duration: 0.4s;
  -moz-animation-fill-mode: both;
  -webkit-animation-iteration-count: 1;
  -moz-animation-iteration-count: 1;
  -webkit-animation-delay: 0.3s; 
  animation-delay: 0.3s;
}

.scroll-animated {
  -webkit-animation-duration: 3s;
  -webkit-animation-fill-mode: both;
  -moz-animation-duration: 3s;
  -moz-animation-fill-mode: both;
  -webkit-animation-iteration-count: 1; 
  -moz-animation-iteration-count: 1;
  -webkit-animation-delay: 0.5s; 
  animation-delay: 0.5s;
}

.delay-animated2 {
  -webkit-animation-duration: 0.4s;
  -webkit-animation-fill-mode: both;
  -moz-animation-duration: 0.4s;
  -moz-animation-fill-mode: both;
  -webkit-animation-iteration-count: 1; 
  -moz-animation-iteration-count: 1;
  -webkit-animation-delay: 0.5s; 
  animation-delay: 0.5s;
}

.delay-animated3 {
  -webkit-animation-duration: 5s;
  -webkit-animation-fill-mode: both;
  -moz-animation-duration: 5s;
  -moz-animation-fill-mode: both;
  -webkit-animation-iteration-count: 1; 
  -moz-animation-iteration-count: 1;
  -webkit-animation-delay: 0.5s; 
  animation-delay: 3s;
}

.fadein {
  -webkit-animation-name: fadein;
  -moz-animation-name: fadein;
  -o-animation-name: fadein;
  animation-name: fadein;
}

@-webkit-keyframes fadein {
  from {
    margin-left: 1000px
  }
  to {
    
  } 
}  
@-moz-keyframes fadein {
  from {
    margin-left: 1000px
  }
  to {
    
  }  
}

.slidein {
  -webkit-animation-name: slidein;
  -moz-animation-name: slidein;
  -o-animation-name: slidein;
  animation-name: slidein;
}

@keyframes marquee {
  0% { 
    left: 0;
  }
  20% { 
    left: 0; 
  }
  100% { left: -100%; }
}

.marquee {
  animation: marquee 10s linear infinite;
  -webkit-animation-duration: 10s;
  -moz-animation-duration: 10s;
  -webkit-animation-delay: 0.5s; 
  animation-delay: 3s;
}

@-webkit-keyframes slidein {
  from {
    margin-left: 800px
  }
  to {
    margin-top: 0px
  } 
}  
@-moz-keyframes slidein {
  from {
    margin-left: 800px
  }
  to {
    margin-top: 0px
  }  
}

.slideup {
  -webkit-animation-name: slideup;
  -moz-animation-name: slideup;
  -o-animation-name: slideup;
  animation-name: slideup;
}
@-webkit-keyframes slideup {
  from {
    margin-top: 30px
  }
  to {
    margin-top: 0;
  } 
}  
@-moz-keyframes slideup {
  from {
    margin-top: 30px
  }
  to {
    margin-top: 0;
  } 
}





</style>








