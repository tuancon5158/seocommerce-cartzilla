 @if (isset($paginator))
 <nav class="d-flex justify-content-center">
     <ul class="pagination pagination-sm text-gray-400">
         @if( $paginator->currentPage() > 1 )
         <ul class="pagination">
             <li class="page-item"><a class="page-link" href="{{ $paginator->appends(request()->query())->url($paginator->currentPage() - 1) }}"><i class="ci-arrow-left me-2"></i>Prev</a></li>
         </ul>
         @endif
         @if( $paginator->currentPage() > 2 )
         <li class="page-item">
             <a href="{{ $paginator->appends(request()->query())->url($paginator->currentPage() - 2) }}" class="page-link">
                 {{ $paginator->currentPage() - 2 }}
             </a>
         </li>
         @endif
         @if( $paginator->currentPage() > 1 )
         <li class="page-item">
             <a href="{{ $paginator->appends(request()->query())->url($paginator->currentPage() - 1) }}" class="page-link">
                 {{ $paginator->currentPage() - 1 }}
             </a>
         </li>
         @endif
         <li class="page-item active">
             <a class="page-link">
                 {{ $paginator->currentPage() }}
             </a>
         </li>
         @if( $paginator->lastPage() > $paginator->currentPage() )
         <li class="page-item">
             <a href="{{ $paginator->appends(request()->query())->url($paginator->currentPage() + 1) }}" class="page-link">
                 {{ $paginator->currentPage() + 1 }}
             </a>
         </li>
         @endif
         @if( $paginator->lastPage() > ( $paginator->currentPage() + 1 ) )
         <li class="page-item">
             <a href="{{ $paginator->appends(request()->query())->url($paginator->currentPage() + 2) }}" class="page-link">
                 {{ $paginator->currentPage() + 2 }}
             </a>
         </li>
         @endif
         @if( $paginator->lastPage() > $paginator->currentPage() )
         <ul class="pagination">
             <li class="page-item"><a class="page-link" href="{{ $paginator->appends(request()->query())->url($paginator->currentPage() + 1) }}" aria-label="Next">Next<i class="ci-arrow-right ms-2"></i></a></li>
         </ul>

         @endif
     </ul>
 </nav>
 @endif
