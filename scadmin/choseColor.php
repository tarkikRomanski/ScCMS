<?php

$css = "@import url(https://fonts.googleapis.com/css?family=Roboto);

/*font-family: 'Roboto', sans-serif;*/
/*
  primary color: #3F51B5; #3F51B5;
  dark primary color: #1A237E; #1A237E
  accent color: #FF3D00; #FF3D00;
 */

body {
  color: #212121;
  font-size: 18px;
  font-family: 'Roboto', sans-serif;
  margin: 0;
  padding: 8px 16px;
  background: url(bg.png);
}

h1 {
  color: #FF3D00;
  text-transform: uppercase;
}

h2, h3 {
  color: #1A237E;
  text-transform: uppercase;
}

h3 {
  text-transform: lowercase;
}

p {

}

a{
  color: #FF3D00;
  text-decoration: none;
}

a:hover {
  color: #212121;
  text-transform: lowercase;
  text-decoration: underline;
}

.ava {
  width: 200px;
  height: 200px;
  border-radius: 100px;
}

.ava img {
  height: 100%;
}

.shadow1 {
  box-shadow: 2px 2px 5px #212121;
}

.shadow2 {
  box-shadow: 4px 4px 10px #212121;
}

.card {
  padding: 8px;
  margin: 8px;
}

.card h1, h2, h3 {
  margin-top: 0px;
}

.fixBtn {
  width: 42px;
  height: 42px;
  box-shadow: 2px 2px 5px #212121;
  position: fixed;
  right: 32px;
  border-radius: 21px;
  color: #fff;
  background: #FF3D00;
  text-align: center;
  cursor: pointer;
  z-index: 10;
}

.fixBtn i {
  font-size: 24px;
  padding-top: 10px;
}

.fixBtn:hover{
 box-shadow: 5px 5px 8px #212121;
}

.checkbox input[type=\"checkbox\"] + label {
  font-size: 18px;
  position: relative;
  cursor: pointer;
}

.checkbox input[type=\"checkbox\"] + label::before {
  content : "";
  display:inline-block;
  width: 18px;
  height: 18px;
  margin-bottom:-2px;
  background: url('icon/box.png') no-repeat;
  background-size: contain;
}
.checkbox input[type=\"checkbox\"]:checked + label::before {
  content : "";
  display:inline-block;
  width: 18px;
  height: 18px;
  margin-bottom:-2px;
  background: url('icon/check_box.png') no-repeat;
  background-size: contain;
}
.checkbox input[type=\"checkbox\"]:disabled  + label::before {
  cursor: inherit;
  overflow: 0.5;
}


.radiobutton input[type=\"radio\"] + label {
  font-size: 18px;
  position: relative;
  cursor: pointer;

}
.radiobutton input[type=\"radio\"]:checked + label {
  color: #3F51B5;
}

.radiobutton input[type=\"radio\"] + label::before {
  content : "";
  display:inline-block;
  width: 18px;
  height: 18px;
  margin-bottom:-2px;
  background: url('icon/off.png') no-repeat;
  background-size: contain;
}
.radiobutton input[type=\"radio\"]:checked + label::before {
  content : "";
  display:inline-block;
  width: 18px;
  height: 18px;
  margin-bottom:-2px;
  background: url('icon/on.png') no-repeat;
  background-size: contain;
}
.radiobutton input[type=\"radio\"]:disabled   + label::before{
  cursor: inherit;
  overflow: 0.5;
}

input {
  background-color: rgba(0,0,0,0);
  border: none;
  border-bottom: solid 2px #1A237E;
  padding: 5px;
  font-family: 'Roboto', serif;
}
input:focus {
  border-bottom-color: #FF3D00;
  color:#FF3D00;
}

select {
  font-family: 'Roboto', serif;
  background-color: rgba(0,0,0,0);;
  border: none;
  border-bottom: solid 2px #1A237E;
  padding: 5px;
  min-width: 200px;
  width: 100%;
}
option {
  padding:2px;
}

 .multi_select {
  border: none;
  background: white;
 }

option:hover{
  background-color: #1A237E;
  color: #ecf0f1;
}

button {
  background-color: #FF3D00;
  color: #ecf0f1;
  font-family: 'Roboto', serif;
  text-transform: uppercase;
  border: none;
  padding: 10px;
  margin: 5px;
  cursor: pointer;
}

input[type=\"radio\"], input[type=\"checkbox\"] {
  display: none;
}

.find {
  position: relative;
  color: #1A237E;
}

.find input {
  height: 24px;
  padding-left: 24px;
}

.find i{
  position:absolute;
  top: 5px;
  left: 0;
  font-size: 24px;
}

.find:focus {
    color: #FF3D00;
}

.alert {
  position: fixed;
  top: 0;
  width: 500px;
  left: 50%;
  margin-left: -250px;
  text-align: center;
  background: #f44336;
  box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
  opacity: 0.3;
}

.alert:hover {
  opacity: 1;
}

#header {
  position: relative;
  width: 100%;
  margin: 0;
  padding: 0;
  height: 460px;
  margin-bottom: 0px;
  z-index: 3;
}

#header h1 {
  position: absolute;
  top: 16px;
  right: 32px;
}

#header .fixBtn {
  position: absolute;
  bottom: -21px;
}

#header h1 {
  color: #fff;
}

#header a {
  color: white;
}

#header a:hover {
  color: #fff;
}

#navigator {
  width: 90%;
  margin-left: 5%;
  position: relative;
  margin-top: 0;
  margin-bottom: 64px;
  background: #fff;
  height: auto;
}

#navigator .menuItem {
  display: inline-block;
  width: 33%;
  height: 40px;
  font-size: 20px;
  padding-top: 30px;
  text-align: center;
  cursor: pointer;
  text-transform: uppercase;
}

#navigator .menuItem:hover {
  color: #FF3D00;
}

.lastNews {
  display: inline-block;
  width: 29%;
  margin-left: 0.5%;
  padding: 20px;
  background: #4FC3F7;
}

.lastNews p {
  text-align: right;
  font-size: 12px;
}

.lastNews h2 {
  color: #fff;
}

#addNewForum {
  width: 100%;
}

#content {
  padding: 80px;
  margin: 20px;
  background: #fff;
}

.news {
  padding: 30px;
  margin: 8px;
  border: 2px solid rgba(189,189,189 ,0.2);
}

.news:hover {
  border: 2px solid rgba(26,35,126 ,0);
  box-shadow: 2px 2px 4px rgba(0,0,0 ,1);
}

.newsPublication {
  text-align: right;
  font-size: 12px;
}

.shortNews {
  width: 100%;
  height: 180px;
  overflow: hidden;
  text-overflow: ellipsis;
}

#newsContent, .topicContent {
  margin-top: 20px;
  padding: 20px;
}

.topic {
  margin: 25px;
  padding: 25px;
  cursor: pointer;
}

.topic:hover {
  box-shadow: 2px 2px 4px rgba(0,0,0 ,1);
}

#Sendcomments {
  padding: 40px;
  margin: 15px;
}

#Sendcomments input {
  width: 100%;
  font-size: 18px;
  margin-bottom: 20px;
}

.historyContent {
  padding: 30px;
  margin: 20px;
}

.bestCard {
  width: 300px;
  height: 350px;
  background-size: contain !important;
  position: relative;
  float: left;
  margin: 30px;
}

.contentBest {
  position: absolute;
  left: 0;
  top: 0;
  width: 90%;
  height: 100%;
  background: rgba(26,35,126 ,0.5);
  opacity: 0;
  cursor: pointer;
  padding: 0px;
  color: white;
}

.contentBest:hover {
  opacity: 1;
}

.contentBest .name {
  position: absolute;
  bottom: 10px;
  text-align: center;
  width: 100%;
}

.contentBest .do {
  padding: 16px;
}

#adminNav {
  padding: 20px;
}

#adminNav a {
  margin: 16px;
  border: 2px solid rgba(189,189,189 ,0.2);
  padding: 20px;
  background: #fff;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
  border-radius: 15px;
}

#adminNav a:hover {
  text-transform: none;
  text-decoration: none;
  -webkit-box-shadow: 1px 1px 3px #000;
  box-shadow: 1px 1px 3px #000;
}

#adminContent {
  padding: 25px;
}

#adminContent input {
  width: 95%;
}

.wysibb {
  margin: 32px;
}

[name=bestDescription] {
  width: 100%;
  height: 300px;
  border: none;
  border-top: 2px solid #1A237E;
  border-bottom: 2px solid #1A237E;
  padding: 8px;
  background: rgba(255,255,255,0.6);
}

[name=bestDescription]:focus {
  border-top: 2px solid #FF3D00;
  border-bottom: 2px solid #FF3D00;
}
";

echo $css;
