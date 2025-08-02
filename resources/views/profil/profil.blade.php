<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Profile Card</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background: #eaeaea;
      margin: 0;
      padding: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .card {
      background: white;
      height: 100%; /* Penuh 1 layar */
      width: 100%;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 5px 12px rgba(0, 0, 0, 0.1);
      position: relative;
      max-width: 500px;
      margin: 0 auto;
    }

    .profile {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px;
    }

    .profile-left {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .avatar {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      background: #888888;
      border: 6px solid #ccc;
    }

    .info h2 {
      margin: 0;
      font-size: 24px;
    }

    .info p {
      margin: 4px 0 0;
      color: #555;
    }

    .status {
      background: #c2f6ce;
      color: #1a7f3c;
      font-size: 12px;
      padding: 6px 12px;
      border-radius: 20px;
      display: flex;
      align-items: center;
      margin-top: -140px;
      margin-right: -30px;
      gap: 6px;
    }

    .status-dot {
      width: 8px;
      height: 8px;
      background: #1a7f3c;
      border-radius: 50%;
    }

    .projects {
      background: #f2f2f2;
      padding: 20px;
      border-radius: 12px;
      margin-top: 30px;
      box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.05);
    }

    .projects-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
    }

    .projects-header h3 {
      margin: 0;
      font-size: 16px;
      color: #888;
    }

    .view-all-btn {
      background: white;
      padding: 6px 12px;
      font-size: 14px;
      border-radius: 6px;
      border: 1px solid #ccc;
      cursor: pointer;
    }

    .project-item {
      background: white;
      border-radius: 8px;
      padding: 15px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 12px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .project-left {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .project-thumb {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: #ccc;
    }

    .project-details {
      display: flex;
      flex-direction: column;
    }

    .project-details .name {
      font-size: 16px;
      margin-bottom: 4px;
    }

    .project-details .desc {
      font-size: 12px;
      color: #666;
    }

    .arrow {
      font-size: 18px;
      color: #666;
    }

.back-button {
  position: absolute;
  left: 8px;
  top: 10px;
  background-color: transparent;
  border: none;
  color: #333;
  font-size: 16px;
  cursor: pointer;
}

.back-button:hover {
  text-decoration: underline;
}

@media (max-width: 600px) {
  .profile-header {
    flex-direction: column;
    align-items: flex-start;
  }

  .status {
    margin-top: -120px;
    margin-left: -20px;
  }

  .back-button {
    font-size: 14px;
  }

  .status-dot {
      width: 15px;
      height: 8px;
      border-radius: 50%;
    }
}


  </style>
</head>
<body>

<div class="card">
  
    <button onclick="location.href='team'" class="back-button" >← Back</button>

  <div class="profile">
    <div class="profile-left">
      <div class="avatar"></div>
      <div class="info">
        <h2>Name</h2>
        <p>Description...</p>
      </div>
    </div>
    <div class="status">
      <div class="status-dot"></div>
      AVAILABLE FOR WORK
    </div>
  </div>

  <div class="projects">
    <div class="projects-header">
      <h3>• Project</h3>
      <button class="view-all-btn">View All →</button>
    </div>

    <div class="project-item">
      <div class="project-left">
        <div class="project-thumb"></div>
        <div class="project-details">
          <div class="name">Name Project 1</div>
          <div class="desc">Description...</div>
        </div>
      </div>
      <div class="arrow">›</div>
    </div>

    <div class="project-item">
      <div class="project-left">
        <div class="project-thumb"></div>
        <div class="project-details">
          <div class="name">Name Project 2</div>
          <div class="desc">Description...</div>
        </div>
      </div>
      <div class="arrow">›</div>
    </div>

<div class="project-item">
      <div class="project-left">
        <div class="project-thumb"></div>
        <div class="project-details">
          <div class="name">Name Project 3</div>
          <div class="desc">Description...</div>
        </div>
      </div>
      <div class="arrow">›</div>
    </div>

<div class="project-item">
      <div class="project-left">
        <div class="project-thumb"></div>
        <div class="project-details">
          <div class="name">Name Project 4</div>
          <div class="desc">Description...</div>
        </div>
      </div>
      <div class="arrow">›</div>
    </div>
  </div>

</body>
</html>
