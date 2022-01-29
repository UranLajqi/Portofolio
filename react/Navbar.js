function Navbar() {
    return (
        <>
          <a href="#header">HOME</a>
          <a href="#about">ABOUT</a>
          <a href="#resume">RESUME</a>
          <a href="#se_skillz">SKILLS</a>
          <a href="#contact">CONTACT</a>
        </>
    );
  }

  ReactDOM.render(<Navbar />, document.getElementById('navbar'));