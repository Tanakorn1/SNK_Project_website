<body>
  <video width="640" height="360" onclick="playVideo()" controlsList="nodownload">
    <source src="./public/images/VideoTest.mp4" type="video/mp4">
    เบราวเซอร์ของคุณไม่รองรับการเล่นวิดีโอ
  </video>
  <button></button>
  <script>
    const correctPassword = "GG123";
    let video = document.querySelector("video");
    let isVideoUnlocked = false;

    function playVideo() {
      if (isVideoUnlocked) {
        video.play();
      } else {
        const password = prompt("กรุณาใส่รหัสผ่านเพื่อเล่นวิดีโอ:");
        if (password === correctPassword) {
          // ถ้ารหัสถูกต้อง
          isVideoUnlocked = true;
          video.controls = true; // เปิดใช้งานคุณสมบัติ controls
          video.play();
        } else {
          // ถ้ารหัสไม่ถูกต้อง
          alert("รหัสผ่านไม่ถูกต้อง โปรดลองอีกครั้ง");
        }
      }
    }
  </script>
</body>
