$(document).ready ->
  $twitterContainer = $("#tweets")
  $twitterPic = $("#twitter-profile-pic")
  twitterHandle = "allenmhc"
  tweetCount = 2
  url = "http://search.twitter.com/search.json?q=from:#{twitterHandle}&amp;rpp=#{tweetCount}&amp;callback=?"
  tweets = []

  $.getJSON(url, (data) ->
    data.results.forEach (tweet) ->
      console.log tweet
      tweets.push new Tweet(tweet.from_user_id, tweet.profile_image_url, tweet.created_at, tweet.text)

    isProfileSet = false
    tweets.forEach (tweet) ->
      if !isProfileSet
        $twitterPic.attr "src", tweet.imageUrl
        isProfileSet = true
      $twitterContainer.append(tweet.toHtml())
  )

class Tweet
  constructor: (@userId, @imageUrl, @dateStr, @text) ->
    @now = moment()

  toHtml: ->
    """
    <div class="tweet">
      <aside>#{@relativeDate()}</aside>
      <p>#{@text}</p>
    </div>
    """

  relativeDate: ->
    moment(@dateStr).from @now
