<nav class="navbar navbar-expand-md navbar-dark bg-danger">
    <a class="navbar-brand"  href="#"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
            </li>
         
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.tabeliao') }}">Tabelioes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.certidao') }}">Certidoes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.contrato') }}">Contratos</a>
                </li>
                
        
        </ul>
    </div>
</nav>
