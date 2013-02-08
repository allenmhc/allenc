(function() {
  var Tweet;
  $(document).ready(function() {
    var $twitterContainer, $twitterPic, spinner, tweetCount, tweets, twitterHandle, url;
    $twitterContainer = $("#tweets");
    $twitterPic = $("#twitter-profile-pic");
    twitterHandle = "allenmhc";
    spinner = new Spinner({
      top: 50,
      left: 200,
      hwaccel: true,
      shadow: true,
      color: "#aaa",
      width: 3,
      length: 6
    }).spin();
    tweetCount = 2;
    url = "http://search.twitter.com/search.json?q=from:" + twitterHandle + "&amp;rpp=" + tweetCount + "&amp;callback=?";
    tweets = [];
    $twitterContainer.append(spinner.el);
    return $.getJSON(url, function(data) {
      var isProfileSet;
      spinner.stop();
      data.results.forEach(function(tweet) {
        return tweets.push(new Tweet(tweet.id_str, tweet.profile_image_url, tweet.created_at, tweet.text));
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
    function Tweet(tweetId, imageUrl, dateStr, text) {
      this.tweetId = tweetId;
      this.imageUrl = imageUrl;
      this.dateStr = dateStr;
      this.text = text;
      this.now = moment();
    }
    Tweet.prototype.toHtml = function() {
      return "<a class=\"tweet\" target=\"_blank\" href=\"" + (this.tweetUrl()) + "\">\n  <aside>" + (this.relativeDate()) + "</aside>\n  <p>" + this.text + "</p>\n</a>";
    };
    Tweet.prototype.relativeDate = function() {
      return moment(this.dateStr).from(this.now);
    };
    Tweet.prototype.tweetUrl = function() {
      return "http://twitter.com/allenmhc/status/" + this.tweetId;
    };
    return Tweet;
  })();
}).call(this);
