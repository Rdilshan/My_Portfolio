
function getIpAddress() {
    // Create a STUN server request to get the IP address
    const pc = new RTCPeerConnection({ iceServers: [{ urls: "stun:stun.l.google.com:19302" }] });
    pc.createDataChannel("");
    pc.createOffer().then(pc.setLocalDescription.bind(pc));

    // Wait for ICE candidate events
    pc.onicecandidate = (e) => {
      if (!e.candidate) {
        return; // All candidates gathered
      }
      const ipRegex = /\d+\.\d+\.\d+\.\d+/;
      const ipAddress = ipRegex.exec(e.candidate.candidate)[0];
      alert("Your IP address is: " + ipAddress);

      // Close the peer connection
      pc.close();
    };
  }

  // Call the function to get the IP address when the page loads
  getIpAddress();
