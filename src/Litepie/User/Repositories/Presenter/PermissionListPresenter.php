<?php

namespace Litepie\User\Repositories\Presenter;

use Litepie\Database\Presenter\FractalPresenter;

class PermissionListPresenter extends FractalPresenter
{
    /**
     * Prepare data to present.
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PermissionListTransformer();
    }
}
