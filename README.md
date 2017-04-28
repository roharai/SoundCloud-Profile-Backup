[![Soundcloud Profile Backup UI][1]](https://soundcloud.onlineth.com/)

The purpose of this script was in answer to [this question](http://softwarerecs.stackexchange.com/a/27700/133) on the Software Recommendations Stack Exchange. It can be used to backup your profile so you can keep a local copy of the information on your own system as well as providing a simple API for other projects to retrieve a lot of information about other profiles without having to use the SoundCloud API. This script uses JSON as the output format, it is organized and easy to view using a JSON Viewer such as JSONView (Available on [Mozilla](https://addons.mozilla.org/en-us/firefox/addon/jsonview/) and [Chrome](https://chrome.google.com/webstore/detail/jsonview/chklaanhfefbnpoihckbnefhakgolnmc?hl=en)) or using [JSON Editor Online](http://www.jsoneditoronline.org/).

You may set this project on your own or **use the [one running here](https://soundcloud.onlineth.com/)**.

## Setup

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/bd84f257039a436f972162f49e1d7b1d)](https://www.codacy.com/app/online/SoundCloud-Profile-Backup?utm_source=github.com&utm_medium=referral&utm_content=onlineth/SoundCloud-Profile-Backup&utm_campaign=badger)

If you'd like to run a local copy of this project on your system, follow this guide.

### Requirements

- Apache (or apache based) web server
- PHP 5.4 or higher

### Guide

1. Clone the repo: `git clone https://github.com/onlineth/SoundCloud-Profile-Backup.git`
2. Edit the `secure.sample.php` file by adding your SoundCloud API Key
3. Rename that file to `secure.php`

Your up and running

## Output

The output once again is in json and looks like this:

```
{
  username: "onlineth",
  user id: 146359378,
  tracks: [ ],
  followers: [],
  following: [],
  favorites: []
}
```

The Followers and Following section provides detailed informtation about each user. Here is an example output of that:

```
  {
  first_name: "Isaac",
  last_name: "Shepard",
  full_name: "Isaac Shepard",
  city: "Orange County",
  description: "NEW ALBUM: "Christmas Piano" - http://bit.ly/1Rt4CHJ www.isaacshepard.com - Isaac Shepard is a modern pianist and composer who lives in Orange County, California. He has composed and performed for over 25 years, released seven solo piano CD’s, written music for over a dozen video games, and composed hundreds of songs across many genres. Contact: manager@isaacshepard.com For more information and sheet music, please visit Isaac's website: http://www.isaacshepard.com",
  country: "United States",
  track_count: 367,
  public_favorites_count: 0,
  followers_count: 442,
  followings_count: 545,
  plan: "Pro Unlimited",
  myspace_name: "isaacshepard",
  discogs_name: null,
  website_title: "Isaac Shepard - Official Website",
  website: "http://www.isaacshepard.com",
  reposts_count: 0,
  comments_count: 7,
  online: false,
  likes_count: 0,
  playlist_count: 41,
  avatar_url: "https://i1.sndcdn.com/avatars-000044938681-c7icon-large.jpg",
  id: 20554957,
  kind: "user",
  permalink_url: "http://soundcloud.com/isaacshepard",
  uri: "https://api.soundcloud.com/users/20554957",
  username: "IsaacShepard",
  permalink: "isaacshepard",
  last_modified: "2016/07/22 19:56:52 +0000"
  }
```

The favorites as well contains detailed information:

```
{
  kind: "track",
  id: 185449063,
  created_at: "2015/01/11 00:53:21 +0000",
  user_id: 21744243,
  duration: 707591,
  commentable: true,
  state: "finished",
  original_content_size: 28545764,
  last_modified: "2015/01/11 12:36:40 +0000",
  sharing: "public",
  tag_list: "",
  permalink: "05-beethoven-symphony-no-9-in",
  streamable: true,
  embeddable_by: "all",
  downloadable: false,
  purchase_url: null,
  label_id: null,
  purchase_title: null,
  genre: "aspen",
  title: "05 Beethoven Symphony No. 9 In D Minor, Op. 125 Choral II Scherzo Molto Vivace–Presto",
  description: "",
  label_name: null,
  release: null,
  track_type: null,
  key_signature: null,
  isrc: null,
  video_url: null,
  bpm: null,
  release_year: null,
  release_month: null,
  release_day: null,
  original_format: "mp3",
  license: "all-rights-reserved",
  uri: "https://api.soundcloud.com/tracks/185449063",
  user: {
    id: 21744243,
    kind: "user",
    permalink: "computereasy",
    username: "Computer (Easy)",
    last_modified: "2015/01/11 00:35:51 +0000",
    uri: "https://api.soundcloud.com/users/21744243",
    permalink_url: "http://soundcloud.com/computereasy",
    avatar_url: "https://a1.sndcdn.com/images/default_avatar_large.png"
  },
  permalink_url: "http://soundcloud.com/computereasy/05-beethoven-symphony-no-9-in",
  artwork_url: null,
  waveform_url: "https://w1.sndcdn.com/0GkcIbPEf9fe_m.png",
  stream_url: "https://api.soundcloud.com/tracks/185449063/stream",
  playback_count: 3004,
  download_count: 0,
  favoritings_count: 12,
  comment_count: 0,
  attachments_uri: "https://api.soundcloud.com/tracks/185449063/attachments"
}
```

## License

This project is Licensed under the [GNU AFFERO GENERAL PUBLIC LICENSE](https://github.com/onlineth/SoundCloud-Profile-Backup/blob/master/LICENSE). You agree to it by useing this service and/or using this project. You accept all responsibiliy and I accept no liability to your actions with this project.

## Bug Reports/Feature Requests

Head on over to the [issue tracker](https://github.com/onlineth/SoundCloud-Profile-Backup/issues) and open an issue. Please be detailed in your issue or feature request.

  [1]: https://i.imgur.com/8GczFjr.png
