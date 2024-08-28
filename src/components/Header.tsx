import { useState } from "react";
import { Link } from "@tanstack/react-router";

export default function Header() {
  const [menuDrop, setMenuDrop] = useState<boolean>(false);
  return (
    <header>
      <nav>
        <div>
          <Link to="/">MVLandscape</Link>
        </div>
        <ul>
          <li>
            <Link to="/">Home</Link>
          </li>
          <li>
            <Link to="/about">About</Link>
          </li>
          <li onClick={() => setMenuDrop(!menuDrop)}>
            Services
            {menuDrop && (
              <ul>
                <Link to="/services/Residential">Residential</Link>
              </ul>
            )}
          </li>
        </ul>
      </nav>
    </header>
  );
}
