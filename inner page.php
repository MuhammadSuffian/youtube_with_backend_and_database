<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youtube Sugesstion page</title>
    <style>
        /* Resetting default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            padding-top: 80px;
             padding-left: 96px;
             padding-right: 24px;
             height: 800px;
        }
/* styling of header */
        .header {
  height: 55px;

  display: flex;
  flex-direction: row;
  justify-content: space-between;

  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 100;

  background-color: white;
  border-bottom-width: 1px;
  border-bottom-style: solid;
  border-bottom-color: rgb(228, 228, 228);
}

.left-section {
  display: flex;
  align-items: center;
}

.hamburger-menu {
  height: 24px;
  margin-left: 24px;
  margin-right: 24px;
  cursor: pointer;
}

.youtube-logo {
  height: 20px;
}

.middle-section {
  flex: 1;
  margin-left: 70px;
  margin-right: 35px;
  max-width: 500px;
  display: flex;
  align-items: center;
}

.search-bar {
  flex: 1;
  height: 36px;
  padding-left: 10px;
  font-size: 16px;
  border: 1px solid rgb(192, 192, 192);
  border-radius: 2px;
  box-shadow: inset 1px 2px 3px rgba(0, 0, 0, 0.05);
  width: 0;
}

.search-bar::placeholder {
  font-size: 16px;
}

.search-button {
  height: 36px;
  width: 46px;
  background-color: rgb(240, 240, 240);
  border-width: 1px;
  border-style: solid;
  border-color: rgb(192, 192, 192);
  margin-left: -1px;
  margin-right: 10px;
}

.search-button,
.voice-search-button,
.upload-icon-container {
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
}

.search-button .tooltip,
.voice-search-button .tooltip,
.upload-icon-container .tooltip {
  position: absolute;
  background-color: gray;
  color: white;
  padding-top: 4px;
  padding-bottom: 4px;
  padding-left: 8px;
  padding-right: 8px;
  border-radius: 2px;
  font-size: 12px;
  bottom: -30px;
  opacity: 0;
  transition: opacity 0.15s;
  pointer-events: none;
  white-space: nowrap;
}

.search-button:hover .tooltip,
.voice-search-button:hover .tooltip,
.upload-icon-container:hover .tooltip {
  opacity: 1;
}

.search-icon {
  height: 25px;
}

.voice-search-button {
  height: 40px;
  width: 40px;
  border-radius: 20px;
  border: none;
  background-color: rgb(245, 245, 245);
}

.voice-search-icon {
  height: 24px;
}

.right-section {
  width: 180px;
  margin-right: 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-shrink: 0;
}

.upload-icon {
  height: 24px;
}

.youtube-apps-icon {
  height: 24px;
}

.notifications-icon {
  height: 24px;
}

.notifications-icon-container {
  position: relative;
}

.notifications-count {
  position: absolute;
  top: -2px;
  right: -5px;
  background-color: rgb(200, 0, 0);
  color: white;
  font-size: 11px;
  padding-left: 5px;
  padding-right: 5px;
  padding-top: 2px;
  padding-bottom: 2px;
  border-radius: 10px;
}

.current-user-picture {
  height: 32px;
  border-radius: 16px;
}

        /* Styling with sidebar */
        .sidebar {
  position: fixed;
  left: 0;
  bottom: 0;
  top: 55px;
  background-color: white;
  width: 72px;
  z-index: 200;
  padding-top: 5px;
}

.sidebar-link {
  height: 74px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  cursor: pointer;
}

.sidebar-link:hover {
  background-color: rgb(235, 235, 235);
}

.sidebar-link img {
  height: 24px;
  margin-bottom: 4px;
}

.sidebar-link div {
  font-size: 10px;
}
.comment-title{
  margin-left: 10px;
  margin-top: 30px;
}
textarea{
  margin-left: 10px;
  width: 57%;
}
#submit-btn{
  margin-left: 10px;
  padding: 8px 8px;
}
        

        
        /* Placeholder for video thumbnails */
        .video-thumbnail {
            width: 60%; 
            height: 400px; /* Adjust height as needed */
            background-color: #f0f0f0; /* Light gray */
            margin-bottom: 20px;
            margin-right: 20px;
        }

        .Suggestion-thumbnail{
          background-color: #f0f0f0; /* Light gray */
        margin-bottom: 20px;
        width:250px;
        height:200px;
        }

        .comment-container{
          margin-top: -250px;
        }
        /* Container for video thumbnails */
        .thumbnails-container {
            display: flex;
            flex-wrap: wrap;
            padding: 0 20px;
        }
        .title{
          margin-left: 20px;
          color: rgb(102, 99, 99);
          font-family: 'Times New Roman', Times, serif;
        }

        /* Styling the footer */
        footer {
            background-color: white; /* Dark background similar to YouTube */
            color: black;
            text-align: center;
            padding: 20px;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="left-section">
          <img class="hamburger-menu" src="https://www.svgrepo.com/show/506800/burger-menu.svg">
          <img class="youtube-logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/YouTube_Logo_2017.svg/1280px-YouTube_Logo_2017.svg.png">
        </div>
        <div class="middle-section">
          <input class="search-bar" type="text" placeholder="Search">
          <button class="search-button">
            <img class="search-icon" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Search_Icon.svg/1024px-Search_Icon.svg.png">
            <div class="tooltip">Search</div>
          </button>
          <!-- Put position absolute inside position relative -->
          <button class="voice-search-button">
            <img class="voice-search-icon" src="https://w7.pngwing.com/pngs/868/768/png-transparent-microphone-computer-icons-sound-recording-and-reproduction-google-voice-search-microphone-cdr-electronics-microphone-thumbnail.png">
            <div class="tooltip">Search with your voice</div>
          </button>
        </div>
        <div class="right-section">
          <div class="upload-icon-container">
            <img class="upload-icon" src="https://static.thenounproject.com/png/566743-200.png">
            <div class="tooltip">Create</div>
          </div>
          <img class="youtube-apps-icon" src="https://icons.veryicon.com/png/o/internet--web/55-common-web-icons/apps-27.png">
          <div class="notifications-icon-container">
            <img class="notifications-icon" src="https://icons.veryicon.com/png/o/object/material-design-icons/notifications-1.png">
            <div class="notifications-count">3</div>
          </div>
          <img class="current-user-picture" src="https://freesvg.org/img/abstract-user-flat-4.png">
        </div>
      </header>
      <nav class="sidebar">
        <div class="sidebar-link">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Home-icon.svg/1024px-Home-icon.svg.png">
          <div>Home</div>
        </div>
        <div class="sidebar-link">
          <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/explore-9260406-7565410.png?f=webp">
          <div>Explore</div>
        </div>
        <div class="sidebar-link">
          <img src="https://cdn.icon-icons.com/icons2/2248/PNG/512/youtube_subscription_icon_136007.png">
          <div>Subscriptions</div>
        </div>
        <div class="sidebar-link">
          <img src="https://www.svgrepo.com/show/79316/youtube.svg">
          <div>Originals</div>
        </div>
        <div class="sidebar-link">
          <img src="https://www.svgrepo.com/show/505120/youtube-music.svg">
          <div>YouTube Music</div>
        </div>
        <div class="sidebar-link">
          <img src="https://cdn-icons-png.flaticon.com/512/565/565290.png">
          <div>Library</div>
        </div>
      </nav>
  
    <div class="thumbnails-container">
       
        <div class="video-thumbnail">player video here</div>
        <div  class="Suggestion-thumbnail-container" style="display: flex; flex-direction: column; width: 30%; margin-left: 30px;">
          <div style="display: flex;">
        <div class="Suggestion-thumbnail" >Recomendation-1
        </div>
        <h3 class="title">title-1</h3>
        </div>
        <div style="display: flex;">
          <div class="Suggestion-thumbnail" >Recomendation-2
          </div>
          <h3  class="title">title-2</h3>
          </div>
          <div style="display: flex;">
            <div class="Suggestion-thumbnail">Recomendation-3
            </div>
            <h3 class="title">title-3</h3>
            </div>
        </div>
        <div style="display: flex;">
            <div class="Suggestion-thumbnail">Recomendation-3
            </div>
            <h3 class="title">title-3</h3>
            </div>
            <div style="display: flex;">
        <div class="Suggestion-thumbnail" >Recomendation-1
        </div>
        <h3 class="title">title-1</h3>
        </div>
        <div style="display: flex;">
        <div class="Suggestion-thumbnail" >Recomendation-1
        </div>
        <h3 class="title">title-1</h3>
        </div>
        </div>
        
        <!-- Add more placeholders as needed -->
    </div>
    
    <div class="comment-container" style="width: 100%;">
      <div class="btns" style="display: flex; width: 50%; flex-direction: row;justify-content: space-between; " >
      <div class="sub-btn" style="display: flex;">
      <button style="margin-left: 10px; color: white; background-color: black; border-radius: 20px;
      padding: 8px 8px;">Subscribe</button>
      </div>
      <div class="like-share-download-btn" style="display: flex; ">
    <button style=" color: black; background-color: rgb(235, 229, 229); border-radius: 8px;
    padding: 10px 14px;border: none;" >Like</button>
    <button  style="margin-left: 15px; color: black; background-color: rgb(235, 229, 229); border-radius: 8px;
    padding: 10px 14px;border: none;">Share</button>
    <button  style="margin-left: 15px; color: black; background-color: rgb(235, 229, 229); border-radius: 8px;
    padding: 10px 14px;border: none;">Download</button>
  </div>  
  </div>
    <h3 class="comment-title">Comment</h3>
<textarea rows="7" cols="94" id="text">Write a comment
</textarea><br>
<button type="Submit" id="submit-btn">Submit</button>
</div>
    <footer>
        &copy; 2024 YouTube | All rights reserved
    </footer>
</body>
</html>
