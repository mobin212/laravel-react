import React from 'react'
import {BrowserRouter as Router,Route,Link} from "react-router-dom";


const Navb = () => {
  return (
    <div>
      <nav className="navbar navbar-expand-lg bg-dark">
  <div className="container-fluid">
    <a className="navbar-brand text-light" href="#">Navbar</a>
    <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span className="navbar-toggler-icon"></span>
    </button>
    <div className="collapse navbar-collapse" id="navbarText">
      <ul className="navbar-nav me-auto mb-2 mb-lg-0">
        <li className="nav-item">
          <a className="nav-link active text-light" aria-current="page" href="#">Home</a>
        </li>
        <li className="nav-item">
          <a className="nav-link text-light" href="#">Profile</a>
        </li>
      </ul>
      <span className="navbar-text ms-4 text-light">
        <Link to="/register" className='text-light'>Register</Link>
      </span>
      <span className="navbar-text ms-4 text-light">
        <Link to="/login" className='text-light'>Login</Link>
      </span>
    </div>
  </div>
</nav>
    </div>
  )
}

export default Navb