# boston-volunteer
New Site for Boston Volunteers

## How to edit video for this site

Use ffmpeg.

Remove the audio:
- `ffmpeg -i original.mp4 -an -c:v copy audioFreeVersion.mp4`

Then optimize:
-  `ffmpeg -i input.mp4 -vcodec h264 -acodec aac -crf 23 -strict -2 :v fps=fps=30 output.mp4`