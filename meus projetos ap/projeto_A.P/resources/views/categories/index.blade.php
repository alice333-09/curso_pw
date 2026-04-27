<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
             <h1>categorias  </h1>

    <ul>
        @foreach($categories as $category)
            <li>{{ $category->nome }}</li> 
        @endforeach
    </ul>
</div>
