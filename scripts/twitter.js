(function() {
  var Tweet;
  $(document).ready(function() {
    var $twitterContainer, $twitterPic, tweetCount, tweets, twitterHandle, url;
    $twitterContainer = $("#tweets");
    $twitterPic = $("#twitter-profile-pic");
    twitterHandle = "allenmhc";
    tweetCount = 2;
    url = "http://search.twitter.com/search.json?q=from:" + twitterHandle + "&amp;rpp=" + tweetCount + "&amp;callback=?";
    tweets = [];
    return $.getJSON(url, function(data) {
      var isProfileSet;
      data.results.forEach(function(tweet) {
        console.log(tweet);
        return tweets.push(new Tweet(tweet.from_user_id, tweet.profile_image_url, tweet.created_at, tweet.text));
      });
      isProfileSet = false;
      return tweets.forEach(function(tweet) {
        if (!isProfileSet) {
          $twitterPic.attr("src", tweet.imageUrl);
          isProfileSet = true;
        }
        return $twitterContainer.append(tweet.toHtml());
      });
    });
  });
  Tweet = (function() {
    function Tweet(userId, imageUrl, dateStr, text) {
      this.userId = userId;
      this.imageUrl = imageUrl;
      this.dateStr = dateStr;
      this.text = text;
      this.now = moment();
    }
    Tweet.prototype.toHtml = function() {
      return "<div class=\"tweet\">\n  <aside>" + (this.relativeDate()) + "</aside>\n  <p>" + this.text + "</p>\n</div>";
    };
    Tweet.prototype.relativeDate = function() {
      return moment(this.dateStr).from(this.now);
    };
    return Tweet;
  })();
}).call(this);
