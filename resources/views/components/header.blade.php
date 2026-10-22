<nav className="app-header navbar navbar-expand bg-body">
    <div className="container-fluid">

        {/* Left side */}
        <ul className="navbar-nav">
            <li className="nav-item">
                <a className="nav-link" href="#" data-lte-toggle="sidebar" role="button" aria-label="Toggle sidebar">
                    <i className="bi bi-list"></i>
                </a>
            </li>

            <li className="nav-item d-none d-md-block">
                <a href="#" className="nav-link">
                    Dashboard
                </a>
            </li>

            <li className="nav-item d-none d-md-block">
                <a href="#" className="nav-link">
                    Documentation
                </a>
            </li>
        </ul>

        {/* Right side */}
        <ul className="navbar-nav ms-auto">

            {/* Notifications */}
            <li className="nav-item dropdown">
                <a className="nav-link" href="#" data-bs-toggle="dropdown" aria-label="Notifications">
                    <i className="bi bi-bell-fill"></i>
                    <span className="navbar-badge badge text-bg-warning">
                        5
                    </span>
                </a>

                <ul className="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <li>
                        <span className="dropdown-item dropdown-header">
                            5 Notifications
                        </span>
                    </li>

                    <li>
                        <a href="#" className="dropdown-item">
                            <i className="bi bi-envelope me-2"></i>
                            4 new messages
                        </a>
                    </li>

                    <li>
                        <a href="#" className="dropdown-item">
                            <i className="bi bi-file-earmark me-2"></i>
                            1 new report
                        </a>
                    </li>
                </ul>
            </li>

            {/* User */}
            <li className="nav-item dropdown">
                <a href="#" className="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i className="bi bi-person-circle me-1"></i>
                    Vincent
                </a>

                <ul className="dropdown-menu dropdown-menu-end">
                    <li>
                        <a href="#" className="dropdown-item">
                            Profile
                        </a>
                    </li>

                    <li>
                        <hr className="dropdown-divider" />
                    </li>

                    <li>
                        <a href="#" className="dropdown-item">
                            Logout
                        </a>
                    </li>
                </ul>
            </li>

        </ul>

    </div>
</nav>