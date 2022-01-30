function Navbar() {
    return (
        <>
          <a href="#header">HOME</a>
          <a href="#skills">SKILLS</a>
          <a href="#education">EDUCATION</a>
          <a href="#works">WORKS</a>
          <a href="#contactMe">CONTACT</a>
        </>
    );
  }

  ReactDOM.render(<Navbar />, document.getElementById('navbar'));
