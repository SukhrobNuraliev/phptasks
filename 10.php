base controllerda getViewPath metodini qayta yozamiz:

public function getViewPath()
{
    return Yii::getAlias('@common/views');
}