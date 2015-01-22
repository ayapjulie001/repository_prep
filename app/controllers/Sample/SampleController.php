<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */


class SampleController extends BaseController
{
    protected $response;

    function __construct(SampleResponse $response)
    {
        parent::__construct();

        $this->response = $response;
    }

    public function showWelcome()
    {
        $data = [
            'scripts' => array_merge(
                Config::get('assets.libraries'),
                Config::get('assets.common'),
                Config::get('assets.scripts.sample')
            ),
            'styles' => array_merge(
                Config::get('assets.styles.libraries'),
                Config::get('assets.styles.sample')
            )
        ];

        return View::make('Sample.main.sample')->with($data);
    }

    public function showSampleUseOfMainLayout()
    {
        $data = [
            'scripts' => array_merge(
                Config::get('assets.libraries'),
                Config::get('assets.common'),
                Config::get('assets.scripts.sample')
            ),
            'styles' => array_merge(
                Config::get('assets.styles.libraries'),
                Config::get('assets.styles.sample')
            ),
            'layout' => [
                'show_left' => true
            ]
        ];

        return View::make('Sample.main.sample_use_of_main_layout')->with($data);
    }

    public function index()
    {
        $area_codes = AreaCode::paginate(2);

        return $this->response->respondSampleList([
            'data' => $area_codes->all(),
            'pagination' => $this->response->getCustomPagination($area_codes)
        ]);
    }

    public function getSamplePdf()
    {
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8');

        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('PAWTECH');
        $pdf->SetTitle(PDF_HEADER_TITLE);
        $pdf->SetSubject('Testing');
        $pdf->SetKeywords('Testing');

        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 004', PDF_HEADER_STRING);

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        $pdf->AddPage();

        $filename = storage_path() . '/test.pdf';
        $pdf->output($filename, 'F');

        return Response::download($filename);
    }
} 