$(document).ready ->
  $twitterContainer = $("#tweets")
  $twitterPic = $("#twitter-profile-pic")
  twitterHandle = "allenmhc"
  tweetCount = 2
  url = "http://search.twitter.com/search.json?q=from:#{twitterHandle}&amp;rpp=#{tweetCount}&amp;callback=?"
  tweets = []

  $.getJSON(url, (data) ->
    data.results.forEach (tweet) ->
      tweets.push new Tweet(tweet.id_str, tweet.profile_image_url, tweet.created_at, tweet.text)

    isProfileSet = false
    tweets.forEach (tweet) ->
      if !isProfileSet
        $twitterPic.attr "src", tweet.imageUrl
        isProfileSet = true
      $twitterContainer.append(tweet.toHtml())
  )

class Tweet
  constructor: (@tweetId, @imageUrl, @dateStr, @text) ->
    @now = moment()

  toHtml: ->
    """
    <a class="tweet" target="_blank" href="#{@tweetUrl()}">
      <aside>#{@relativeDate()}</aside>
      <p>#{@text}</p>
    </a>
    """

  relativeDate: ->
    moment(@dateStr).from @now

  tweetUrl: ->
    "http://twitter.com/allenmhc/status/#{@tweetId}"
